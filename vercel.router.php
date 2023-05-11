<?php

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        require_once 'public/index.php';
        break;

    default:
        $path = 'public' . $_SERVER['REQUEST_URI'];
        if (file_exists($path)) {
            return false;
        } else {
            require_once 'public/index.php';
        }
        break;
}