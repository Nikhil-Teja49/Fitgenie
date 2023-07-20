<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self_Defense | Home</title>
    <link rel="shortcut icon" type="images" href="./src/images/logo/logo.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!--Css file-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <nav>
            <img src="./src/images/logo/FitGenie.png" class="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Calories</a></li>
                <li><a href=".#">Fitness</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </nav>

        <div class="row">
            <div>
                <div class="content">
                    <div class="wrapper three">
                        <div>
                            <h3>FitNess Is The <br>New Normal</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>