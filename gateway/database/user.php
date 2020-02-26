<?php

class UserDatabase implements UserGateway {
    /**
     * @var User[]
     */
    private $_users;

    function __construct() {
        $_users[] = new User();
        $_users[] = new User();
    }

    function getAll()
    {
        return $this->_users;
    }

    function x() {

    }
}