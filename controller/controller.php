<?php

function create()
{
    $name = $_POST['name'];
    $job = $_POST['job'];
    $level = $_POST['level'];
    $faction = $_POST['faction'];

    if (filter_var($name, FILTER_SANITIZE_STRING) !== false && filter_var($job, FILTER_SANITIZE_STRING) !== false && filter_var($level, FILTER_VALIDATE_INT) !== false) {
        createCharacter($name, $job, $level, $faction);
        print("je passe par ici");
    } else {
        header('Location: /examAlexisPhp/index.php');
        exit();
    }

    header('Location: /examAlexisPhp/index.php');
    exit();
}

function delete()
{
    $id = $_GET['id'];
    if (filter_var($id, FILTER_VALIDATE_INT) !== false) {
        deleteById($id);
    }

    header('Location: /examAlexisPhp/index.php');
    exit();
}

function read()
{
    $posts = getAll();

    include("templates/mainView.php");
}

function updateForm($id)
{
    $charact = getOne($id);

    include("templates/updateViewForm.php");
}
function createForm(){
    include("templates/createViewForm.php");
}

function update()
{



    $name = $_POST['name'];
    $job = $_POST['job'];
    $level = $_POST['level'];
    $id = $_POST['id'];
    $faction = $_POST['faction'];

    if (
        filter_var($name, FILTER_SANITIZE_STRING) !== false
        && filter_var($job, FILTER_SANITIZE_STRING) !== false
        && filter_var($level, FILTER_VALIDATE_INT) !== false
        && filter_var($id, FILTER_VALIDATE_INT) !== false
    ) {

        updateCharacter($name, $job, $level, $faction, $id);
    } else {
        header('Location: /examAlexisPhp/index.php');
        exit();
    }

    header('Location: /examAlexisPhp/index.php');
    exit();
}
