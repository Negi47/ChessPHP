<?php 
session_start();
include "./database/dataconnect.php" ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>

    <nav class="mynav">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">TACTICAL</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="badges.html">About</a></li>
            
            <?php if (!isset($_SESSION['username'])): ?>

            <li><a href="collapsible.html">Sign In</a></li>

            <?php else: ?>

            <li>
                <a class='dropdown-trigger btn' href='#' data-target='dropdown1'> <?= $_SESSION['username'] ?> </a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="#!">two</a></li>
                </ul>    
            </li>

            <?php endif; ?>
            </ul>
        </div>
    </nav>
