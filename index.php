<?php

require_once "./models/user.php";
require_once "./gateway/user.php";
require_once "./gateway/database/user.php";

/**
 * @var $userGateway UserGateway
 */
$userGateway = new UserDatabase();

$users = $userGateway->getAll();

foreach ($users as $user) {
    $user->hello();
}