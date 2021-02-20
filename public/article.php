<?php
require "../vendor/autoload.php";

use League\Plates\Engine;

$templates = new Engine( '../views');

echo $templates->render("../views/article", [
    "pageTitle" => "Curso Aplicaciones Profesionales en PHP",
    "title" => "Artículo",
    "article" => [
        "title" => "Título de Artículo",
        "content" => "Contenido de Artículo",
    ]
]);