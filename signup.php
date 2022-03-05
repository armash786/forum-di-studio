<?php
require "header.php";
?>

    <main>
        <div class="container">
        <h1 style="font-family: OpenSans-Regular;text-align:center;">Signup</h1>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error']=="emptyfield") {
                echo '<p class="signuperror">Fill in all fields</p>';
            }
            else if ($_GET['error']=="passwordcheck") {
                echo '<p class="signuperror">Password entered does not match</p>';
            }
            else if ($_GET['error']=="usertaken") {
                echo '<p class="signuperror">Username already taken</p>';
            }
            
        }
        else if(isset($_GET['signup'])) {
            if ($_GET['signup']=="success") {
                echo '<p class="signupsuccess">Signup Successfully!</p>';
            }        
        }
        ?>
        <fieldset style="border-radius:15px;border-style: solid;border-color:black;opacity:0.9;">
        <form action="includes/signup.inc.php" method="POST"><br>
        <input class="input-fields-signup" type="text" name="uid" pattern="^\b[a-z ]{1,30}\b$"  title="Enter a valid name eg. tomholland" placeholder="Username"><br>
        <input class="input-fields-signup" type="text" name="mail" pattern="\b\w{1,64}\b[@]\b[a-z]{1,255}\b[\.](com|in|gov)" title="Please enter a valid email address eg. admin@admin.com" placeholder="Email"><br>
        <input class="input-fields-signup" type="password" name="pwd" pattern="^[a-zA-Z0-9]{8}$" title="Password should atleast consist of 8 characters with uppercase,lowercase letters and numbers" placeholder="Password"><br>
        <input class="input-fields-signup" type="password" name="pwd-repeat" placeholder="Repeat Password"><br>
        <button class="signupButton" type="submit" name="signup-submit">Signup</button>
        </form>
        </fieldset>
        </div>

    </main>

<?php
require "footer.php";
?>