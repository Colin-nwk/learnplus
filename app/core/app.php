<?php

class App
{
    protected  $controller = "_404";
    protected $method = "index";

    function __construct()
    {

        $arr = $this->getURL();

        $filename = "../app/controllers/" . ucfirst($arr[0]) . ".php";

        if (file_exists($filename)) {

            require_once $filename;
            $this->controller = $arr[0];
            unset($arr[0]);
        } else {

            require_once "../app/controllers/" . $this->controller . ".php";
        }

        $currentController = new $this->controller();
        $currentMethod = $arr[1] ?? $this->method;

        if (!empty($arr[1])) {

            if (method_exists($currentController, strtolower($currentMethod))) {
                $this->method = strtolower($currentMethod);
                unset($arr[1]);
            }
        }
        // show($arr);
        $arr = array_values($arr);
        call_user_func_array([$currentController, $this->method], $arr);
    }

    private function getURL()
    {
        $url = $_GET['url'] ?? 'home';

        $url = filter_var($url, FILTER_SANITIZE_URL);

        $arr = explode("/", $url);

        return $arr;
    }
}