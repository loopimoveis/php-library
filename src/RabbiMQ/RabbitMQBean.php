<?php

namespace Loopimoveis\RabbiMQ;


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
    /* Atributos para testes locais */
    //private $server = 'localhost';
    //private $user = '<login>';
    //private $pass = '<senha>';

    private $server = '169.57.176.103';
    private $user = 'api';
    private $pass = '6F3GZrEpXFdAykBz';
    private $port = 5672; /* Porta para envio */
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