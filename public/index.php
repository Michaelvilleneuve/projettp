<?php 
$datas = array(
    'title' => 'Michael et Octave',
    'name' => 'world',
    'menulink' => array(
        'login' => 'login.php',
        'register' => 'register.php',
        'home' => 'index.php'
    ),
    'current' => 'home',
    'tab' => array('Login', 'Register', 'Accueil')
);
require_once '../vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('../application/views');
$twig = new Twig_Environment($loader);
echo $twig->render('index.twig', $datas);
