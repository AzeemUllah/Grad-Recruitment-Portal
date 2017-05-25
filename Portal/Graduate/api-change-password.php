<?php
/**
 * Created by PhpStorm.
 * User: Azeem Ullah
 * Date: 2/15/2017
 * Time: 12:48 AM
 */
include("api-config.php");
session_start();
$error = 0;
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $currentPassword = mysqli_real_escape_string($db,$_POST['currentPassword']);
    $newPassword = mysqli_real_escape_string($db,$_POST['newPassword']);
    $newPasswordRetry = mysqli_real_escape_string($db,$_POST['newPasswordRetry']);

    $sql = "UPDATE users SET password='".$newPassword."' WHERE password='". $currentPassword."'";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['login_user'] = $myuserpassword;

        $error=0;
    } else {
        $error=1;
    }

    $conn->close();
}
if ($error == 1){
	header('Location: change-password.php?status=faliure&text=Error+updating!');
}
else if($error == 0){
	header('Location: change-password.php?status=sucess&text=Update+sucessful!');
}
?>
