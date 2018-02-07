<?php

namespace Loopimoveis\RabbitMQ;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;


/**
 * RabbitMQ
 *
 * Composer needs to have "phpseclib/phpseclib": "^2.0"
 * @see https://www.rabbitmq.com/getstarted.html
 */
class RabbitMQ extends RabbitMQBean
{
    public function __construct()
    {
        $_VHOST = 'loopimoveis';
        $this->setConnection(
            new AMQPStreamConnection(
                $this->getServer(),
                $this->getPort(),
                $this->getUser(),
                $this->getPass()
                // $_VHOST
            )
        );
        $this->setChannel($this->getConnection()->channel());
    }

    public function initQueue($queue_name, $passive = false, $durable = false, $exclusive = false, $auto_delete = false)
    {
        $this->getChannel()->queue_declare($queue_name, $passive, $durable, $exclusive, $auto_delete);
    }

    public function createAMQPMessage($message, $properties = [])
    {
        return new AMQPMessage($message, $properties);
    }

    public function publish($msg, $queue_name)
    {
        $this->getChannel()->basic_publish($msg, '', $queue_name);
    }

    public function closeAll()
    {
        $this->getChannel()->close();
        $this->getConnection()->close();
    }

}
