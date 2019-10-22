<?php
require_once '../src/views/base.html.twig';
require_once '../vendor/autoload.php';
$products = [ 'Articles', 'Destinations', 'Souvernirs', 'Photos', 'Films', 'Pour finir', 'Le dessert' , 'ouf'];
$loader = new \Twig\Loader\FilesystemLoader('../src/views');
$twig = new \Twig\Environment($loader);
echo $twig->render('index.html.twig', ['products'=>$products]);
