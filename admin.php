<?php
require 'header.php';

$username = sanitizeInput($_POST['username']);
$password = sanitizeInput($_POST['password']);
$user = new User($username,$password); 

?>

<div class="row blue">
    <div class="col">
        <?php if($user->checkPassword()) {
            echo 'Password is correct';
        } else {
            echo 'Password is incorrect';
        }; ?>
    </div>
</div>

<?php
require 'footer.php';
?>