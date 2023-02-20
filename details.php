<?php
require 'header.php';

// Check if ID parameter is set
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM aliens WHERE id = $id AND approved = 1";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);

  if ($row) {
    // Display sighting details
    echo '<div class="col">';
    echo '<h1>Sighting details</h1>';

    // Display location, date and time, and description
    echo "<p class='fw-bold'>Location:</p>";
    echo "<p>{$row['location']}</p>";
    echo "<p class='fw-bold'>Date & Time:</p>";
    echo "<p>". formatDate($row['date']) ." - {$row['time']}</p>";
    echo "<p class='fw-bold'>Description:</p>";
    echo "<p>{$row['message']}</p>";
    echo '</div>';

    // Display image
    $imagePath = 'assets/images/' . $row['alienImg'];
    if (!empty($row['alienImg']) && file_exists($imagePath)) {
        echo "<img src='$imagePath' alt='Alien image' class='img-fluid'>";
    } else {
        echo "<img src='assets/images/default-image.jpg' alt='Default image' class='img-fluid'>";
    }    

  } else {
    // Sighting not found
    echo '<div class="col">';
    echo '<h1>Sighting not found</h1>';
    echo '<p>The sighting you requested could not be found.</p>';
    echo '</div>';
  }

} else {
  // ID parameter not set
  echo '<div class="col">';
  echo '<h1>Invalid request</h1>';
  echo '<p>The request is missing a valid ID parameter.</p>';
  echo '</div>';
}

require 'footer.php';
