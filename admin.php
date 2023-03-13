<?php
require 'header.php';
checklogin();


// logout routine
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    // check if username is submitted!
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);
    $user = new User($username,$password); 
    if($user->checkPassword()) {
        // redirect to admin page
        header('Location: admin.php');
    } else {
        echo 'Password is incorrect';
    };
} 

?>

<div class="row blue">
    <div class="col">
        <?php 
           
           echo '<h3>Welcome Administrator!</h3>';
           echo "<a class='btn btn-warning mt-3 mb-2' href='admin.php?logout=true'>Logout</a>";
           $moderate = new Moderate();
              $aliens = $moderate->getUnapproved();
              foreach ($aliens as $alien) {
                // echo $alien data in table
                echo '<table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Location</th>
                    <th scope="col">Image</th>
                    <th scope="col">Approve</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">' . $alien['id'] . '</th>
                    <td>' . $alien['name'] . '</td>
                    <td>' . $alien['email'] . '</td>
                    <td>' . formatDate($alien['date']) . '</td>
                    <td>' . $alien['time'] . '</td>
                    <td>' . $alien['location'] . '</td>
                    <td><img src=assets/images/' . $alien['alienImg'].'</td>
                    <td><a href="approve.php?id=' . $alien['id'] . '">Approve</a></td>
                  </tr>
                </tbody>
                </table>';
              }
            
            ?>
    </div>
</div>

<?php
require 'footer.php';
?>