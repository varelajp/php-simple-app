<?php
require "../vendor/autoload.php";

use League\Plates\Engine;

$templates = new Engine( '../views');

echo $templates->render("../views/contact", [
    "pageTitle" => "Curso Aplicaciones Profesionales en PHP",
    "title" => "Página de contacto",
    "email" => "usuarios@desarrolloweb.com"
]);