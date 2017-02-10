<?php
    date_default_timezone_set("America/Los_Angeles");
    include_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    return $app;
?>
