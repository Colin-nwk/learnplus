<?php
spl_autoload_register(function ($class_name) {
    require_once "../app/models/" . $class_name . ".php";
});


/**
 * order of files required is very important and specific
 */
require "functions.php";
require "config.php";
require "database.php";
require "model.php";
require "controller.php";
require "app.php";