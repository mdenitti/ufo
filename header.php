<?php
require 'includes/common.php';
require 'includes/env.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ufo</title>
  <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">

    <nav class="navbar navbar-expand-lg  ">
      <a class="navbar-brand" href="#"><img class="logo" src="assets/images/SPACESPY.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="index.php">Home</a>
          <a class="nav-link" href="aboutus.php">About us</a>
          <a class="nav-link" href="blog.php">Blog</a>
          <a class="nav-link" href="history.php">Sighting list</a>
          <a class="nav-link" href="contact.php">Contact</a>
        </div>
        <!-- <div class="search">
          <form class="d-flex" action="results.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search location" aria-label="Search"
              name="search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </div> -->

      </div>
    </nav>
  </div>

  <div class="container">