<?php
session_start();
?>

<!DOCTYPE html>
<html lang="eng" dir="ltr">

<head>
    <meta charset='utf-8'>
    <title>Vanilla Cake Recipe</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="author" content="Ethan">
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
</head>

<body class="content">
    <nav>
        <div class="nav_bar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href ='profile.php'>Profile page</a></li>";
                    echo "<li><a href ='includes/logout.inc.php'>Logout</a></li>";
                } else {
                    echo "<li><a href ='signup.php'>Sign up</a></li>";
                    echo "<li><a href ='login.php'>Log in</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>
    <div class="wrapper">