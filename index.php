<?php
require "header.php";
?>

    <main>
        <?php
        if (isset($_SESSION['userUid'])){
            header("Location: homepage.php");
        }
        else{
            echo '<p style="font-family:OpenSans-Regular; font: size 25px;margin-left: 60px;">You are logged out</p>';
        }
        ?>

    </main>

<?php
require "footer.php";
?>