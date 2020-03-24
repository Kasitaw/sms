<?php

namespace Kasitaw\Sms\Contracts;

interface SmsContract
{
    /**
     * Receiver's phone number.
     *
     * @param $phone
     *
     * @return mixed
     */
    public function to($phone);

    /**
     * Send over HTTP or else.
     *
     * @return mixed
     */
    public function send();
}
