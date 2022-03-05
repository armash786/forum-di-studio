<?php
session_start();
$servername = "localhost:3325";
$dBUsername = "root";
$dBPassword = "";
$dBName = "mini-project";
$conn =  mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
    die("Connection Failed :".mysqli_connect_error());
}

else if (isset($_POST['post-submit'])) {
    $postcontent = $_POST['post-content'];
    if (empty($postcontent)) {
        
        header("Location:physics.php?error=emptyfield");
        exit();
    }
    else{
        $postcontent=$_POST['post-content'];
        $postby=$_SESSION['userUid'];
        $sql = "INSERT INTO `mini-project`.`posts` (`post_content`, `post_by`) VALUES ('$postcontent', '$postby')";
        if(mysqli_query($conn, $sql)){
            header("Location:physics.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
         
    }
}
mysqli_close($conn);
?>

