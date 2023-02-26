<?php require 'header.php' ?>

<div class="container">
  <h1 class="my-3">Search results</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Location</th>
        <th scope="col">Date &amp; Time</th>
        <th scope="col">Description</th>
        <th scope="col">Scary</th>
        <th scope="col">Details</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $search = mysqli_real_escape_string($conn, $_GET['search']);
        $query = "SELECT * FROM aliens WHERE approved = 1 AND location LIKE '%$search%' ORDER BY id DESC";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            // Construct image path
            $imagePath = 'assets/images/' . $row['alienImg'];
            // Check if image is not empty and exists
            if (!empty($row['alienImg']) && file_exists($imagePath)) {
              echo "<td><img src='$imagePath' width='100px'></td>";
            } else {
              // Display default image
              echo "<td><img src='assets/images/default-image.jpg' width='100px'></td>";
            }
            // Display other data
            echo '<td>' . $row['location'] . '</td>';
            echo '<td>' . formatDate($row['date']) . ' - '. $row['time'] .'</td>';
            echo '<td>' . $row['message'] . '</td>';
            echo '<td>' . ($row['scary'] ? 'Yes' : 'No') . '</td>';
            echo "<td><a href='details.php?id={$row['id']}' class='btn btn-primary'>Details</a></td>";
            echo '</tr>';
          }
        } else {
          echo '<tr><td colspan="6">No results found.</td></tr>';
        }
      ?>
    </tbody>
  </table>
</div>

<?php require 'footer.php' ?>
