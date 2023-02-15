<!DOCTYPE html>
<html lang="en">
  <head>
    <title>assoc</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
</head>

  <body>
    <div class="container">
    <?php
        $myAssocArray = [
            'citrus' => ['orange', 'lemon', 'lime'],
            'bosvruchten' => ['apple', 'pear', 'plum'],
            'exotisch' => ['banana', 'pineapple', 'mango'],
            'hapis' => ['kiwi', 'grape', 'strawberry']
        ]; 
    // print_r($myAssocArray);
    // var_dump($myAssocArray);

    foreach ($myAssocArray as $key => $value) {
       echo "<div class='alert alert-primary'>".$key."</div>";
         foreach ($value as $fruit) {
              echo "<ul class='list-group'>";
              echo "<li class='list-group-item'>$fruit</li>";
              echo "</ul>";
         }
         echo "<br>";
    }
   ?>
    </div>
  </body>
</html>