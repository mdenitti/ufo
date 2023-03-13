<?php
require 'header.php';
checklogin();

// approve routine wiht $_GET['aprrove']
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $moderate = new Moderate($id);
    print_r($moderate);
   
    print_r($moderate->approve());
    echo "Alien approved!";
}