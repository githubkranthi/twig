<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'vendor/autoload.php';
require 'extension/Extension.php';

$loader = new Extension('views');
//$loader = new Twig_Loader_Filesystem('views');

$twig   = new Twig_Environment($loader, ['debug' => true]);

echo $twig->render('welcome',[
    'name' => "rama",
    'age'  => "52"
]);