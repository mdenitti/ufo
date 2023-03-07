<?php 
require 'header.php';
?>

        <div class="row">
            <div class="col">
                <h1>UFO submit result</h1>
                <?php
                // check if form is submitted
                if(!isset($_POST)){
                    echo "Please fill out the form first...";
                    die();
                }

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

                // PDF SNIPPET
                $pathImg = 'assets/images/'.$filename;
                $getImg = file_get_contents($pathImg);
                $encimage = base64_encode($getImg);
                

                // reference the Dompdf namespace
               
                $html = '<body style="font-family: Helvetica;">';
                $html .= '<h1 style="color:#CC0000">UFO Certificate</h1>';
                $html .= '<p>You have been in contact with a UFO</p>';
                $html .= '<p>Name: '.$name.'</p>';
                $html .= '<p>Email: '.$email.'</p>';
                $html .= '<p>Location: '.$location.'</p>';
                $html .= '<p>Date: '.formatDate($date).'</p>';
                $html .= '<p>Time: '.$time.'</p>';
                $html .= '<p>Message: '.$message.'</p>';
                $html .= '<p><img src="data:image/svg+xml;base64,'.$encimage.'" width="300px"></p>';
                // $html .= '<p>Image: <img src="http://localhost:8000/assets/images/'.$filename.'" width="200"></p>';   
                $html .= '<p>Scary: '.($scary ? 'Yes' : 'No').'</p>';
                $html .= '<p>Thank you for your submission</p>';
                $html .= '</body>';

<<<<<<< HEAD
                // instantiate and use the dompdf class
                $dompdf = new Dompdf();
                $dompdf->loadHtml($html);

                // (Optional) Setup the paper size and orientation
                $dompdf->setPaper('A4', 'landscape');

                // Render the HTML as PDF
                $dompdf->render();
                ob_end_clean();

                // Output the generated PDF to Browser
                $dompdf->stream('my_document.pdf');
=======
                // Generate the PDF and get its file path
               
                
>>>>>>> f7564eed7db9afa9a4412eabdd4fa695cf95c8ce
                
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
                <hr>
                <?php
                    $pdfPath = generatePDF($html);
                    $downloadpdf = $pdfPath;
                    echo '<a href="'.$downloadpdf.'" class="btn btn-primary" target="_blank">Download PDF</a>';
                ?>
            </div>
        </div>

<?php require 'footer.php' ?>