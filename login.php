<?php
require 'header.php';

?>

<div class="row blue">
    <div class="col">
        <form action="admin.php" method="post">
            <!-- make a login form here with username and password -->
            <input type="text" class="form-control mt-1" name="username" placeholder="Username" required>
            <input type="password" class="form-control mt-1" name="password" placeholder="Password" required>
            <button type="submit" class="btn btn-primary mt-1" name="submit">Login</button>
        </form>
    </div>
</div>

<?php
require 'footer.php';
?>