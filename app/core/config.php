<?php

/**
 * app info
 */

// show($_SERVER);


define("APPNAME", "LearnPlus");
define("APPDESC", "Free and paid tutorials");
define("APPVERSION", "1.0.0");


if ($_SERVER['SERVER_NAME'] == 'localhost') {

    //local server 
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBNAME", "learnplus");
    define("DBPASS", "");
    define("DBDRIVER", "mysql");
    define("ROOT", "http://localhost/learnplus/public");
} else {
    //live server
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBNAME", "learnplus");
    define("DBPASS", "");
    define("DBDRIVER", "mysql");
    //root path eg https://www.yourwebsite.com
    define("ROOT", "https://");
}