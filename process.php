<?php require 'header.php' ?>

        <div class="row">
            <div class="col">
                <h1>UFO submit result</h1>
                <?php
                // check if scary isset
                if(isset($_POST['scary'])){
                    $scary = 1;
                    echo "<div class='alert alert-danger' role='alert'>
                    Warning: DO NOT INTERACT WITH THE MONSTER!
                  </div>";
                } else {
                    $scary = 0;
                }
                // print_r($_POST);
                // print_r($_FILES);
                // check if file is uploaded
                
                $filename = generateRandomString(12).'.jpg';
                move_uploaded_file($_FILES['alienImg']['tmp_name'],'assets/images/'.$filename);

                $name = sanitizeInput($_POST['name']);
                $email = sanitizeInput($_POST['email']);
                $message = sanitizeInput($_POST['message']);
                $location = sanitizeInput($_POST['location']);
                $date = $_POST['date'];
                $time = $_POST['time'];

                echo $date;
                //die();
                
                $insertQuery = "INSERT INTO `aliens` (`name`, `email`, `location`, `date`, `time`, `scary`, `message`, `alienImg`, `approved`) 
                VALUES ('$name', '$email', '$location', '$date', '$time', $scary, '$message', '$filename',0)";

                // execute the query
                $result = $conn->query($insertQuery);

                ?>
                <h2>Personal</h2>
                <p>Name: <?php echo $name;?><p>
                <p>Email: <?php echo $email;?></p>
                <h2>Location</h2>
                <p>Location: <?php echo $location;?></p>
                <p>Date: <?php echo $date;?></p>
                <p>Time: <?php echo $time;?></p>
                <hr>
                <h2>Description</h2>
                <p><?php echo $message;?></p>
                <hr>
                <h2>Image</h2>
                <img src="assets/images/<?php echo $filename?>" width="200">
            </div>
        </div>

<?php require 'footer.php' ?>