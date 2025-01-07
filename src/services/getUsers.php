<?php

namespace Services;

use vendor\classes\Bdd;

function getUsers()
{
    $cnx = Bdd::getInstance();
    $stmt = $cnx->prepare("SELECT * FROM user");
    $stmt->execute();

    $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    var_dump($users);
}
