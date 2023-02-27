<?php require 'header.php' ?>

<div class="col">
    <h1>Sightings list</h1>

<!--     bootstrap tabel
    query select * from aliens
    foreach van de data
    basic styling -->

    <?php 
    $query = "SELECT * FROM aliens WHERE approved = 1 ORDER BY id DESC";
    // $result = mysqli_query($conn, $query);
    // $results = mysqli_fetch_assoc($result);

    // get result and iterate with while loop
    $result = mysqli_query($conn, $query);
   
/*     Each time when mysqli_fetch_assoc($result) is accessed, the pointer moves to the next record. At last when no records are found, it returns null which breaks the while condition.
 */

    ?>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Location</th>
      <th scope="col">Date & time</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>

    <?php

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
        echo '<td><a href="details.php?id=' . $row['id'] . '&name=' . $row['name'] . '&location=' . $row['location'] . '&date=' . $row['date'] . '&time=' . $row['time'] . '&message=' . $row['message'] .'" class="btn btn-primary">Details</a></td>';
        echo '</tr>';

      }

    ?>

    </tbody>
</table>


</div>

<?php require 'footer.php' ?>