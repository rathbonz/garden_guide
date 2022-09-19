<?php require_once('php_functions.php');
        destroy_session();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The GardenGuide will home gardeners through planting their home gardens.">
    <title>GardenGuide</title>
    <link rel="stylesheet" href="main.css">
    
</head>
<body>
<?php require_once('php_functions.php');
        initiate_session();
    ?>
    <div class="index-body">
        <h1>Welcome to<br>Garden<span class="green-span">Guide</span></h1><br><br>
        <div>
            <a onclick="showFormNew()" class="new-user user-button">New User</a>
            <a onclick="showFormExisting()"href="#" class="existing-user user-button">Existing User</a>
        </div>
        
        <div class="form-box">
            <div id="new-user-id" class="new-user-form user-forms">
                <form action="home.php" method="post">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name"><br>
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name"><br>
                    <label for="zip-code">Zip Code</label>
                    <input type="number" id="zip-code" name="zip-code" min="10000" max="99999"><br>
                    <label for="pin">4 Digit Pin</label>
                    <input type="number" id="pin" name="pin" min="1000" max="9999"><br>
                    <input type="submit" class="send-new-user" value="Submit">
                </form>
            </div>

            <div id="existing-user-id" class="existing-user-form user-forms">
                <form action="">
                    <label for="user-name">User Name</label>
                    <input type="text" id="user-name" name="user-name"><br>
                    <label for="pin">4 Digit Pin</label>
                    <input type="number" id="pin" name="pin" min="1000" max="9999"><br>
                    <input type="submit" class="send-new-user" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>