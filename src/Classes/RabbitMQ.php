<?php

namespace Loopimoveis\Classes;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;


/**
 * RabbitMQ
 *
 * Composer needs to have "phpseclib/phpseclib": "^2.0"
 * @see https://www.rabbitmq.com/getstarted.html
 */
class RabbitMQ
{
    private $server = '169.57.176.103';
    private $user = 'api';
    private $pass = '6F3GZrEpXFdAykBz';
    private $port = 5672; /* Porta para envio */
    private $connection;
    private $channel;

    public function __construct()
    {
        $this->connection = new AMQPStreamConnection($this->server, $this->port, $this->user, $this->pass);
        $this->channel = $this->connection->channel();
    }

    public function initQueue($queue_name)
    {
        $this->channel->queue_declare($queue_name, false, false, false, false);
    }

    public function createAMQPMessage($message, $properties = '')
    {
        return new AMQPMessage($message, $properties);
    }

    public function publish($msg, $queue_name)
    {
        $this->channel->basic_publish($msg, '', $queue_name);
    }

    public function closeAll()
    {
        $this->channel->close();
        $this->connection->close();
    }

}
