<?php
require 'includes/common.php';
require 'includes/env.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ufo</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
</head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>UFO Sighting</h1>
                <h3>Submit your UFO sighting</h3>
                <p>Fill out the form below to submit your UFO sighting
                - <?php echo getDateInDutch()?>
                </p>

                <form method="post" action="process.php" enctype="multipart/form-data">
                    <input class='form-control' type="text" name="name" placeholder="Name"><hr>
                    <input class='form-control' type="email" name="email" placeholder="Email"><hr>
                    <input class='form-control' type="text" name="location" placeholder="Location"><hr>
                    <input class='form-control' type="date" name="date" placeholder="Date"><hr>
                    <input class='form-control' type="time" name="time" placeholder="Time"><hr>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="scary">
                          Does the alien look scary?
                    </div>
                    <textarea class='form-control' name="message"></textarea><br>
                    <input type="file" name="alienImg"><hr>
                    <input class='btn btn-primary' type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
  </body>
</html>