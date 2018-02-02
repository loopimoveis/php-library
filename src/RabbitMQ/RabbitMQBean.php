<?php

namespace Loopimoveis\RabbitMQ;

define("RB_SERVER", $_ENV['RB_SERVER']);
define("RB_USER", $_ENV['RB_USER']);
define("RB_PASS", $_ENV['RB_PASS']);
define("RB_PORT", $_ENV['RB_PORT']);

/**
 * Class RabbitMQBean
 * @package Loopimoveis\RabbiMQ
 *
 * Classe bean com atributos, getters e setters da classe RabbitMQ
 *
 * Para efetuar testes localmente mude os três primeiros atributos para as suas configurações locais
 * e comente os atributos equivalentes da classe
 */
class RabbitMQBean
{
    private $server = RB_SERVER;
    private $user = RB_USER;
    private $pass = RB_PASS;
    private $port = RB_PORT; /* Porta para envio */
    private $connection;
    private $channel;

    /**
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param string $server
     */
    public function setServer($server)
    {
        $this->server = $server;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param mixed $connection
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param mixed $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }


}