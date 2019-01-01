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
    <link rel="stylesheet" href="css/profile.css">

</head>
<body onbeforeunload="return refresh()">

    <nav class="mynav">
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">TACTICAL</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="badges.html">About</a></li>
                
                <?php if (!isset($_SESSION['username'])): ?>

                <li><a href="login.php">Sign In</a></li>

                <?php else: ?>

                <li style="height: 64px;" class="valign-wrapper">
                    <div class="usertrigger" data-target='userprofilemenu'>
                        <img src="Images/board-background.png" alt="">
                    </div>
                </li>

                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <ul id='userprofilemenu' class='dropdown'>
        <li class="chonch"></li>
        <?php if(isset($_SESSION['username'])): ?>
            <li><a href="profile.php"> <?= $_SESSION['username'] ?> </a></li>
            <hr>
            <li><a href="logout.php">Logout</a></li>                        
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        <?php endif; ?>
    </ul> 