<?php

require '../DBConnection/Connector.php';
$kuryayapi = "hpap"; 

$myusername = stripslashes($_POST['loguser']);
$mypassword = stripslashes($_POST['logpass']);
$mypassword = md5($kuryayapi . $mypassword);

$sql = "SELECT * FROM employee WHERE username='$myusername' and password='$mypassword'";
$result = mysqli_query($dbconn, $sql);

session_start();
if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION['loguser'] = $row['username'];
    }
    header("location:../WebPages/home.php");
} else {
    header("location:../WebPages/loginfailed.php");
}

$dbconn->close();
?>
