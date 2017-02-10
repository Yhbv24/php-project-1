<?php
    date_default_timezone_set("America/Los_Angeles");
    include_once __DIR__."/../vendor/autoload.php";
    include_once __DIR__."/../src/Contact.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    session_start();

    if(empty($_SESSION["list_of_contacts"])) {
        $_SESSION["list_of_contacts"] = array();
    }

    $app->get("/", function() use ($app) {
        $all_contacts = Contact::showAll();

        return $app["twig"]->render("index.html.twig", array("all_contacts" => $all_contacts));
    });

    $app->post("/add_contact", function() use ($app) {
        $new_contact = new Contact($_POST["first_name"], $_POST["last_name"], $_POST["phone_number"], $_POST["address"]);
        $new_contact->saveContact();

        return $app["twig"]->render("index.html.twig", array("add_contact" => $new_contact));
    });

    return $app;
?>
