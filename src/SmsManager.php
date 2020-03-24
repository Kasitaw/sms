<?php

namespace Kasitaw\Sms;

use Illuminate\Support\Manager;
use Kasitaw\Sms\Driver\IsmsDriver;
use Kasitaw\Sms\Driver\Sms123Driver;

class SmsManager extends Manager
{
    /**
     * Get the default driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return $this->container['config']['sms.default'];
    }

    /**
     * Set the default driver name.
     *
     * @param string $name
     *
     * @return void
     */
    public function setDefaultDriver($name)
    {
        $this->container['config']['sms.default'] = $name;
    }

    /**
     * Create a driver instance.
     *
     * @param array $config
     *
     * @return \Kasitaw\Sms\Driver\IsmsDriver
     */
    public function createIsmsDriver(array $config)
    {
        return new IsmsDriver($config);
    }

    /**
     * Create a driver instance.
     *
     * @param array $config
     *
     * @return \Kasitaw\Sms\Driver\Sms123Driver
     */
    public function createSms123Driver(array $config)
    {
        return new Sms123Driver($config);
    }

    /**
     * Get the connection configuration.
     *
     * @param string $name
     *
     * @return array
     */
    protected function getConfig($name)
    {
        if (!is_null($name) && 'null' !== $name) {
            return $this->container['config']["sms.connections.{$name}"];
        }

        return ['driver' => 'isms'];
    }
}
