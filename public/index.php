<?php

require '../vendor/autoload.php';


$templates = new League\Plates\Engine('../app/views');

if ($_SERVER['REQUEST_URI'] == "/"){
    echo $templates->render('homepage', ['name' => 'MARK']);
} elseif ($_SERVER['REQUEST_URI'] == "/about") {
    echo $templates->render('about');
}