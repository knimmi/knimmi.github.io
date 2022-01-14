<?php

require 'modules/db.php';

function getProjects()
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM projects");
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Project");
    return $result;
}
