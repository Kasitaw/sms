<?php

namespace Kasitaw\Sms;

use Kasitaw\Sms\Traits\HasSms;
use Kasitaw\Sms\Contracts\SmsContract;

class Sms implements SmsContract
{
    use HasSms;

    /**
     * Sender's phone number.
     *
     * @var
     */
    protected $sender;

    /**
     * Driver specific config.
     *
     * @var array
     */
    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }
}
