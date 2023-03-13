<?php
require 'header.php';
checklogin();

if (isset($_POST['username']) && isset($_POST['password'])) {
    // check if username is submitted!
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);
    $user = new User($username,$password); 
} else {
    // redirect to login page
    header('Location: login.php');
}

?>

<div class="row blue">
    <div class="col">
        <?php if($user->checkPassword()) {
           
           echo 'Welcome ' . $user->username . '!';

        } else {
            echo 'Password is incorrect';
        }; ?>
    </div>
</div>

<?php
require 'footer.php';
?>