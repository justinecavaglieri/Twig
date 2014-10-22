<?php
/**
 * Created by PhpStorm.
 * User: justine
 * Date: 21/10/2014
 * Time: 17:45
 */

require __DIR__.'/vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
]);

$twig = new Twig_Environment($loader, [
    //'cache' => null,
]);

$article = [
    'name' => 'djfghjgkj',
    'content' => 'sdfghjk',
];
echo $twig->render('article.html.twig', [
    'article' => $article,
]);