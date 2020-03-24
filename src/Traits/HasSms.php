<?php

namespace Kasitaw\Sms\Traits;

trait HasSms
{
    public function to($phone)
    {
        $this->sender = $phone;

        return $this;
    }

    public function send()
    {
    }
}
