<?php

class App
{
    public function __construct()
    {
        print_r($_GET);
    }
}

$app = new App();

// var_dump($app);