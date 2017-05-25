<?php
/**
 * Created by PhpStorm.
 * User: Azeem Ullah
 * Date: 2/15/2017
 * Time: 12:48 AM
 */
    session_start();
   include("api-config.php");
$error=0;

   if($_SERVER["REQUEST_METHOD"] == "POST") {
       // username and password sent from form

       $myusername = $_POST['username'];
       $mypassword = $_POST['password'];

       $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword' and user_type = 'graduate'";
       $result = $conn->query($sql);

       $count = mysqli_num_rows($result);

       // If result matched $myusername and $mypassword, table row must be 1 row

       
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
												$_SESSION["user_id"] = $row["user_id"];	
													$_SESSION["user_name"] = $row["username"];
											header("location: edit.php");			
														}
			
			} else {
			$error=1;
			}
			$conn->close();
   }
   
   
   	if ($error == 1){
	header('Location: login.php?status=faliure&text=Error+updating!');
}
	else if($error == 0){
	header('Location: profile.php?status=sucess&text=Login+sucessful!');
}
?>