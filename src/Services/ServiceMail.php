<?php

namespace Gsferro\ServiceMail\Services;

use Gsferro\ServiceMail\Events\MailerEvent;

class ServiceMail
{
    /**
     * @param string $view
     * @param string $subject
     * @param string $to
     * @param mixed $data
     * @param \DateTime|null $timeEvent
     * @return ServiceMail
     */

    /**
     * @param string $view
     * @param string $subject
     * @param string $to
     * @param mixed $data
     * @param \DateTime|null $timeEvent
     *
     */
    public function send(
        string $view,
        string $subject,
        string $to,
        $data,
        ?\DateTime $timeEvent = null,
        ?string $attach = null,
        $cc = null
    )
    {
        event(new MailerEvent($view, $subject, $to, $data, $timeEvent, $attach, $cc));
    }
}