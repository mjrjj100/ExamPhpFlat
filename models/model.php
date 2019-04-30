<?php

function open_database_connection()
{
    $link = new PDO("mysql:host=localhost;dbname=worldofwarcraft", 'root', '');
    return $link;
}
function close_database_connection(&$link)
{
    $link = null;
}

function getAll()
{
    $link = open_database_connection();
    $result = $link->query("SELECT * FROM personnage");
    $posts = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
    close_database_connection($link);

    return $posts;
}

function getOne($id)
{
    $link = open_database_connection();
    $result = $link->query("SELECT * FROM personnage WHERE id = $id");
    $toReturn = $result->fetch(PDO::FETCH_ASSOC);
    close_database_connection($link);
    return $toReturn;
}

function deleteById($id)
{
    $link = open_database_connection();
    $result = $link->query("DELETE FROM personnage WHERE id = $id");
    close_database_connection($link);
}

function createCharacter($name, $class, $level,$faction)
{
    $link = open_database_connection();
    $result = "INSERT INTO personnage (name, class, level, faction) VALUES (?, ?, ?, ?)";
    $insert = $link->prepare($result);
    $insert->execute(array($name, $class, $level, $faction));

    close_database_connection($link);
}

function updateCharacter($name, $class, $level, $faction, $id)
{
    $link = open_database_connection();
    $result = "UPDATE personnage SET name = ?, class = ?, level = ?, faction = ? WHERE id = $id";
    $insert = $link->prepare($result);
    $insert->execute(array($name, $class, $level, $faction));

    close_database_connection($link);
}
