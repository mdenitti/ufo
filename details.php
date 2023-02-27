<?php require 'header.php' ?>

<?php
$id =  $_GET['id'];
$name =  $_GET['name'];
$location =  $_GET['location'];
$date =  formatDate($_GET['date']);
$time =  $_GET['time'];
$message =  $_GET['message'];

// echo 'Name: ' . $name . ' <br>Location: ' . $location . '<br>Date: ' . $date . '<br>Time: ' . $time . '<br>Message: ' . $message;
echo "<div class='card'>
        <ul class='list-group list-group-flush'>
        <li class='list-group-item'><b>Name: </b>$name</li>
        <li class='list-group-item'><b>Location: </b>$location</li>
        <li class='list-group-item'><b>Date: </b>$date</li>
        <li class='list-group-item'><b>Time: </b>$time</li>
        <li class='list-group-item'><b>Message: </b><br>$message</li>
        </ul>
</div>";
?>



<?php require 'footer.php' ?>

<!-- <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div> -->

<!-- detail.php?id=3
detail.php?id='.$row[
1. create branch   - check
2. create details.php - check
3. template details.php (header/footer) - check
4. history.php (send id with button) - 
5. detail.php -> fetch $_GET and assign to $var - 
6. query with id = $var - 
7. Show details in detail.php --> - 