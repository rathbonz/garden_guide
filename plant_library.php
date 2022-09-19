<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant List</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="navbar"> 
        <a class = "logo" href="home.php">Garden<span class="green-span">Guide</span></a>

        <img id="mobile-cta" class="mobile-menu" src="images/menu_button.svg" alt="open navigation">

        <nav>
            <img id="mobile-exit" class="mobile-menu-exit" src="images/exit_button.svg" alt="exit navigation">
            <ul class="primary-nav">
                <li><a href="plant_list.php">Plant List</a></li>
                <li><a class="current" href="plant_library.php">Plant Library</a></li>
                <li><a href="calendar.php">Calendar</a></li>
            </ul>

            <ul class="secondary-nav">
                <li><a href="contact.php">Contact</a></li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </nav>
    </div>
    <section class="hero">
        <div class="container library">
            <h1>Plant Library</h1>
            <div class="plant-listing">
                <?php require('php_functions.php');
                    plant_library();
                ?>

            </div>
        </div>
    </section>
</body>
</html>
