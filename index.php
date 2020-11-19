<?php

require "vendor/autoload.php";

use Controller\Controller;

$routes = new Controller;

define("URL",str_replace("index.php","", (isset($_SERVER["HTTPS"])? "https" : "http"). "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

try {
    if (empty($_GET['page'])) {
        $routes->listBooks();
    } else {
        switch ($_GET['page']) {
            case 'index':
            case 'accueil':
                $routes->listBooks();
                break;
            case 'books':
                $routes->getBook();
                break;
            case 'posts':
                $routes->postBooks();
                break;
            
            default:
                throw new Exception("La page n'existe pas");
                break;
        }
    }
    
} catch (Exception $e) {
    $error = $e->getMessage();
    require "views/error.view.php";
}