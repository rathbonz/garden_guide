<?php require_once('php_functions.php');
        start_session();
        pull_user();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garden Guide</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="navbar"> 
        <a class = "logo" href="home.php">Garden<span class="green-span">Guide</span></a>

        <img id="mobile-cta" class="mobile-menu" src="/images/menu_button.svg" alt="open navigation">

        <nav>
            <img id="mobile-exit" class="mobile-menu-exit" src="/images/exit_button.svg" alt="exit navigation">
            <ul class="primary-nav">
                <li><a href="plant_list.php">Plant List</a></li>
                <li><a href="plant_library.php">Plant Library</a></li>
                <li><a href="calendar.php">Calendar</a></li>
            </ul>

            <ul class="secondary-nav">
                <li><a href="contact.php">Contact</a></li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </nav>
    </div>

    <section class="hero">
        <div class="container">
            <h1>Hello <span class="green-span"><?php echo ucwords($_SESSION["first_name"]);?></span><br>
                Welcome to <br> 
                Garden<span>Guide</span></h1>
            <h3>You have 0 Saved Plants in your Plant List<br>
                Click <a href="#" class="green-link">here</a> to go to the Plant Library<br><br>
                You have 0 Calendar Items this Month<br>
                Click <a href="#" class="green-link">here</a> to go to the Calendar<br><br>
            </h3>
        </div>
    </section>
</body>
</html>


























