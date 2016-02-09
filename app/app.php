<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobOpening.php";
    require_once __DIR__."/../src/Contact.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
            <title>Make a rectangle!</title>
        </head>
        <body>
            <div class='container'>
                <h1>Joberator</h1>
                <p>Type in a sweet job that pays super well.</p>
                <form action='/view_job'>
                    <div class='form-group'>
                      <label for='title'>Enter the title:</label>
                      <input id='title' name='title' class='form-control' type='text'>
                    </div>
                    <div class='form-group'>
                      <label for='description'>Enter the description:</label>
                      <input id='description' name='description' class='form-control' type='text'>
                    </div>
                    <div class='form-group'>
                      <label for='name'>Enter the name:</label>
                      <input id='name' name='name' class='form-control' type='text'>
                    </div>
                    <div class='form-group'>
                      <label for='email'>Enter the email:</label>
                      <input id='email' name='email' class='form-control' type='text'>
                    </div>
                    <div class='form-group'>
                      <label for='phone'>Enter the phone numba:</label>
                      <input id='phone' name='phone' class='form-control' type='number'>
                    </div>
                    <button type='submit' class='btn-success'>Create</button>
                </form>
            </div>
        </body>
        </html>
        ";
    });



    $app->get("/view_job", function() {

    $new_contact = new Contact($_GET["name"], $_GET["email"], $_GET["phone"]);
    $new_job = new JobOpening($_GET["title"], $_GET["description"], $new_contact);

    $title = $new_job->getTitle();
    $description = $new_job->getDescript();
    $job_contact = $new_job->getContact();

    $name = $job_contact->getName();
    $email = $job_contact->getEmail();
    $number = $job_contact->getPhoneNumba();

      return "
        <h1>Here is your new job listing:</h1>
        <h3>$title</h3>
        <h4>$description</h4>
        <ul>
            <li>$name</li>
            <li>$email</li>
            <li>$number</li>
        </ul>

      ";

    });


  return $app;


 ?>
