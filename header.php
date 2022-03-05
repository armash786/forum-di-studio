<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".PortfolioBtn").click(function () {
                $(".portfolio-content").slideToggle();
                $(".home-content").hide();
                $(".about-content").hide();
                $(".contact-content").hide();
            });
            $(".HomeBtn").click(function () {
                $(".home-content").slideToggle();
                $(".portfolio-content").hide();
                $(".about-content").hide();
                $(".contact-content").hide();
            });
            $(".AboutBtn").click(function () {
                $(".about-content").slideToggle();
                $(".home-content").hide();
                $(".portfolio-content").hide();
                $(".contact-content").hide();
            });
            $(".ContactBtn").click(function () {
                $(".contact-content").slideToggle();
                $(".home-content").hide();
                $(".about-content").hide();
                $(".portfolio-content").hide();
            });
        });
    </script>
</head>
<body>
    <header>
        <nav class="navigation">
            <div>
                <img src="logo.png" alt=""><span><b>By the students, For the students!</b></span>
            <button class="HomeBtn" style="width:100px;height:35px;font-size:20px;background-color:#4487FC;color:white;font-family:OpenSans-Regular.ttf;border-radius:5px;margin-left:35px;">Home</button>
            <button class="PortfolioBtn" style="width:100px;height:35px;font-size:20px;background-color:#FF5733;color:white;font-family:OpenSans-Regular.ttf;border-radius:5px;">Portfolio</button>
            <button class="AboutBtn" style="width:100px;height:35px;font-size:20px;background-color:#65DF44;color:white;font-family:OpenSans-Regular.ttf;border-radius:5px;">About Us</button>
            <button class="ContactBtn" style="width:100px;height:35px;font-size:20px;background-color:#FFC300;color:white;font-family:OpenSans-Regular.ttf;border-radius:5px;">Contact</button>
            
            <div class="home-content" style="display:none;background-color:lightsalmon;color:white;width:1300px;height:50px;padding:15px 10px;border-radius:15px;margin-top:40px;margin-left:35px;">An Internet forum, or message board, is an online discussion site where people can hold conversations in the form of posted messages.They differ from chat rooms in that messages are often longer than one line of text, and are at least temporarily archived. </div>
            <div class="portfolio-content" style="display:none;background-color:lightsalmon;color:white;width:1300px;height:30px;padding:15px 10px;border-radius:15px;margin-top:40px;margin-left:35px;">Connect with People that share your enthusiasm about a wide range of topics from around the world!</div>
            <div class="about-content" style="display:none;background-color:lightsalmon;color:white;width: 600px;00px;height:100px;padding:15px 10px;border-radius:15px;margin-top:40px;margin-left:35px;">Developed by students of computer engineering from NHITM: <br>
Armash Momin <br>
Piyush Meshram <br>
Shubham Nandgaokar</div>
            <div class="contact-content" style="display:none;background-color:lightsalmon;color:white;width: 600px;00px;height:35px;padding:15px 10px;border-radius:15px;margin-top:40px;margin-left:35px;">EMAIL us on: armashanjum@gmail.com</div>
            </div>
            <br>
            <div>
            <?php

            if (isset($_SESSION['userUid'])){
                echo '<form action="includes/logout.inc.php" method="post" class="log">
                <button type="submit" name="logout-submit" class="logoutButton">Logout</button></form>';
            }
            else{
                echo '<form action="includes/login.inc.php" method="post" class="log">
                    
                    <input class="input-fields" type="text" id="username" name="mailuid" placeholder="Username/email">
                    <input class="input-fields" type="password" name="pwd" placeholder="Enter Password Here">
                    <button type="submit" name="login-submit" class="loginButton">Login</button>
                    <a href="signup.php">Signup</a>
                </form>';
                if (isset($_GET['error'])) {
                    if ($_GET['error']=="nouser") {
                        echo '<p style="margin-left: 35px; color:red;">No user exists</p>';
                    }
                    else if ($_GET['error']=="emptyfield") {
                        echo '<p style="margin-left: 35px; color:red;">Please enter the required information</p>';
                    }
                    else if ($_GET['error']=="wrongpwd") {
                        echo '<p style="margin-left: 35px; color:red;">Please enter correct password</p>';
                    }
                }
            }
            ?>
            </div>

        </nav>
    </header>