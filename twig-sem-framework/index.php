<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FileSystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'temp/twig'
]);

$myFilter = new \Twig\TwigFilter('myfilter', function ($string) {
    return "- " . $string;
});

$myfunction = new \Twig\TwigFunction('myfunction', function($num1, $num2){
    return $num1 + $num2;
});

$twig->addFilter($myFilter);
$twig->addFunction($myfunction);
$twig->addGlobal('user', 'Antonio Abrantes');

$content = $twig->render('hello.html.twig', [
    "nome" => 'Elton Fonseca'
]);

echo $content;