<?php require 'header.php' ?>

        <div class="row">
            <div class="col">
        
                <h6>Admin</h6>

                <form method="post" action="process.php" enctype="multipart/form-data" class="bg-dark p-2 text-dark bg-opacity-10 rounded mb-2">
                    <input class='form-control' type="email" name="email" placeholder="Email"><hr>
                    <input class='form-control' type="text" name="password" placeholder="Password"><hr>
                    <input class='btn btn-primary' type="submit" value="Submit">
                </form>
            </div>
        </div>

 <?php require 'footer.php' ?>