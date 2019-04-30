<?php

require('controller/controller.php');
require('models/model.php');

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//Routing

//l'url parser est comparer pour pouvoir faire appel au controller concerner selon l'url

if ('/examAlexisPhp/' === $uri) {
    read();
} elseif ('/examAlexisPhp/index.php' == $uri) {
    read();
} elseif ('/examAlexisPhp/index.php/createPersonnage' === $uri) {
    create();
} elseif ('/examAlexisPhp/index.php/createForm' === $uri) {
    createForm();
} elseif ('/examAlexisPhp/index.php/delete' === $uri && isset($_GET['id'])) {
    delete();
} elseif ('/examAlexisPhp/index.php/updateForm' == $uri && isset($_GET['id'])) {
    updateForm($_GET['id']);
} elseif ('/examAlexisPhp/index.php/updatePersonnage' == $uri) {

    update();

} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>ERROR 404 FILE NOT FOUND !</h1></body></html>';
}
