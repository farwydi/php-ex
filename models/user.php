<?php

class User {
    public $id;
    public $name;

    function hello() {
        echo "Hello: " . $this->name;
    }
}