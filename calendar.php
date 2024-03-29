<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant List</title>
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
                <li><a class="current" href="calendar.php">Calendar</a></li>
            </ul>

            <ul class="secondary-nav">
                <li><a href="contact.php">Contact</a></li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </nav>
    </div>
    <section class="hero">
        <div class="container calendar">
            <h1>Calendar</h1>
            <h3>Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec</h3>
            <div class="plant-listing">
                <div class="plant-item">
                        <div class="plant-image item-inline"><img src="images/carrot.jpg" alt="carrot"></div>
                        <div class="plant-name item-inline">Carrot</div>
                        <div class="like-indicator item-inline"> <img src="images/favorite.svg" alt="Favorite Indicator"> </div>
                        <div class="plant-attributes item-inline">
                            <ul>
                                <li>Harvest when ready.</li>
                                <li>Pleanty of time to replant!</li>                                
                            </ul>
                        </div>
                </div>
                
            </div>
            <h3>Click <a href="#" class="green-link">here</a> to add plants from the Plant Library</h3>
        </div>
    </section>
</body>
</html>