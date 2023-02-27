<?php require 'header.php' ?>

<div class="col">
    <h1>Sightings list</h1>

    <?php 
    $query = "SELECT * FROM aliens WHERE approved = 1 ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Location</th>
                <th scope="col">Date &amp; time</th>
                <th scope="col">Description</th>
                <th scope="col">Scary</th>
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
                    echo '<td>' . $row['message'] . '</td>';
                    echo '<td>' . ($row['scary'] ? 'Yes' : 'No') . '</td>';
                    echo "<td><a href='details.php?id=". base64_encode($row['id']) ."' class='btn btn-primary'>Details</a></td>";
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>

<?php require 'footer.php' ?>
