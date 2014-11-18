<?php 
require_once '../vendor/autoload.php';
$loader = new Twig_Loader_File('../application/views');
$twig = new Twig_Environment($loader);
echo $twig->render('index.twig', array('name'=>'Michael'));