<?php

class Controller
{
    public function view(string $view, array $data = [])
    {
        extract($data);
        $filename = "../app/views/" . $view . ".view.php";

        if (file_exists($filename)) {
            require_once $filename;
        } else {
            echo "could not find view file " . $filename;
        }
    }
}