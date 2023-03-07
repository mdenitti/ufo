<?php require 'header.php' ?>

<div class="row blue">
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
                <th scope="col">Date &amp; Time</th>
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
                        echo "<td><img src='$imagePath' class='img img-fluid history' width='100px'></td>";
                    } else {
                        // Display default image
                        echo "<td><img src='assets/images/default-image.jpg' class='img img-fluid history' width='100px'></td>";
                    }
                    // Display other data
                    echo '<td>' . $row['location'] . '</td>';
                    echo '<td>' . formatDate($row['date']) . ' - '. $row['time'] .'</td>';
                    echo '<td>' . $row['message'] . '</td>';
                    echo '<td>' . ($row['scary'] ? 'Yes' : 'No') . '</td>';
                    // Encrypt the ID using openssl_encrypt
                    $id_encrypted = encrypt_id($row['id']);
                    echo "<td><a href='details.php?id=$id_encrypted' class='btn btn-primary'>Details</a></td>";
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
            </div>

<?php require 'footer.php' ?>
