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

    $app->get("/", function() use ($app) { // This is the home page
        $all_contacts = Contact::showAll();

        return $app["twig"]->render("index.html.twig", array("all_contacts" => $all_contacts));
    });

    $app->get("/add_new_contact", function() use ($app) { // Takes user to form which will allow a contact to be added
        return $app["twig"]->render("add_new_contact.html.twig");
    });

    $app->post("/add_contact", function() use ($app) { // Form adds contact to $_SESSION memory, shows most recently added contact
        $new_contact = new Contact($_POST["first_name"], $_POST["last_name"], $_POST["phone_number"], $_POST["street"], $_POST["city"], $_POST["state"], $_POST["zip"]);
        $new_contact->saveContact();

        return $app["twig"]->render("just_added.html.twig", array("new_contact" => $new_contact));
    });

    $app->post("/delete_all", function() use ($app) { // Deletes all contacts and takes user back to the home page
        Contact::deleteAll();

        return $app["twig"]->render("index.html.twig");
    });

    return $app;
?>
