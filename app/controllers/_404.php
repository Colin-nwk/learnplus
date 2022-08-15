<?php

/**
 * 404 class page not found
 */

class _404 extends Controller
{
    function index()
    {
        $data['title'] = "Page not found";
        $this->view('404', $data);
    }
}