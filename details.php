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
    echo "<p><strong>Location:</strong> {$row['location']}</p>";
    echo "<p><strong>Date:</strong> ". formatDate($row['date']) ." - {$row['time']}</p>";
    echo "<p><strong>Description:</strong> {$row['message']}</p>";
    echo '</div>';
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
