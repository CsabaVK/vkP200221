<?php
    define('APPATH', 'Application/');

    $page = @$_GET['page'] ? $_GET['page'] : "users";
    $filePath = "config.json";


    require_once APPATH.'functions.php';

    // switch
    switch($page)
    {
        case "users":require_once APPATH."Core/users.php"; break;
    }


    require_once APPATH.'Templates/_layout.php';