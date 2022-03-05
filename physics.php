<?php
session_start();
$servername = "localhost:3325";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

$conn =  mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
if($_SESSION["userUid"]==true){
    echo "<div style='font-size: 20px;

    font-family:OpenSans-Regular;
    color: black;'>Welcome @".$_SESSION["userUid"]."</div>";
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style_topics.css?v=<?php echo time(); ?>">
        <title>
            Physics
        </title>
    </head>
    <body>
        <section class="heading">
            <p><h1> Physics</h1></p>
        </section>

        <section>
            <div >
                <?php
                if (isset($_SESSION['userUid'])){
                    if (isset($_POST['post-submit'])) {
                        $postcontent = $_POST['post-content'];
                        if (empty($postcontent)) {
                            
                            echo '<script>document.write("Please Enter Something to Post !")</script>';
                            exit();
                        }
                    }
                    echo '<form action="includes/logout.inc.php" method="post" class="log">
                    <button style="font-size: 20px;
                    font-family:OpenSans-Regular;
                    background-color: black;
                    color: white;
                    border-radius: 5px;" type="submit" name="logout-submit" class="logoutButton">Logout</button></form>';
                    echo'<form action="post_script.php" method="POST" class=post>
                    <p>
                    <textarea name="post-content" cols=100 rows=8 placeholder="Enter your thoughts here" class="textareafont" id="message"></textarea><br>
                    <input type="submit" name="post-submit" value="Post" class="postbutton" onclick="postMessage()">
                    <input style="margin-left:30px;" type="button" value="Clear" class="cleartextbutton" onclick="clearMessage()">
                    </p>
                    </form>';
            }

            ?>
            <?php
            echo '<fieldset style="border-radius:15px;
            width:800px;
            margin-left:35px;
            border-style: solid;
            border-color:black;
            opacity:0.9;
            background-color: #FFB363;">';
            echo '<legend style="font-size: 24px;
            font-family: OpenSans-Regular;
            border-width: 5px;"><b> Previous Posts:</b>'; 
            echo '</legend>';            
            ?>
            <?php
            $connect = mysqli_connect("localhost:3325","root","","mini-project");
            $query = "SELECT post_content,post_by FROM posts";
            $result = mysqli_query($connect,$query);
            /*echo mysqli_num_rows($result);
            echo "<br>";*/
            while ($record = mysqli_fetch_assoc($result)) {
                /*echo "<pre>";
                print_r($record);
                echo "<pre>";*/
                
                echo '<div style="font-size: 18px;
                background-color: #BBC01E;
                font-family: OpenSans-Regular;
                width: 600px;
                margin-left:35px;
                margin-top:20px;
                padding:15px 10px;
                border-style: solid;
                border-color:black;
                border-radius:15px;">Posted by: @'.$record['post_by'].'<br>'.$record['post_content'];
                /*echo '<form action="reply_script.php" method="POST"><input name=replyButton type="submit" value="Add Reply"></form>';*/
                echo '</div><br>';
            }
            ?>
            <?php      
            echo '</fieldset>';

            ?>

            </div>
            <div id="textbox"></div>
            <div id="post-div" class="postMessage">

            </div>
            <div id="reply-div" class="replyMessage">

            </div>
        </section>

    </body>
</html>