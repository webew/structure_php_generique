<?php
require_once '../config/configBdd.php';
require_once '../autoload.php';

use vendor\classes\Bdd;

$cnx = new PDO('mysql:host=localhost;charset=utf8mb4', BDD_USER, BDD_PASSWORD);
$stmt = $cnx->prepare("CREATE DATABASE " . BDD_NAME . " CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci");
$stmt->execute();

$cnx2 = Bdd::getInstance();
$stmt2 = $cnx2->prepare("CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `email` varchar(320) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");
$stmt2->execute();
