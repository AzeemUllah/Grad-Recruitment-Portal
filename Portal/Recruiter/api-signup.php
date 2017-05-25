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
	   $userType= $_POST['user_type'];
	   
	   
		$sql = "INSERT INTO users (username,password,user_type) VALUES ('".$myusername."','".$mypassword."','".$userType."')";
				
				if ($conn->query($sql) === TRUE) {
					$error=0;
				} else {
					$error=1;
				}
	   
		$sql = "SELECT * FROM users where username = '" . $myusername . "' and password='".$mypassword."' and user_type='".$userType."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
					header("location: signup.php?id=".$row['user_id']."&type=".$row['user_type']);
				}
														} else {
															$error=1;
   }
																
	   /*

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
			echo "wrong ID or Passowrd";
			}
			$conn->close();
   */}
      	if ($error == 1){
	header('Location: signup.php?status=faliure&text=Error+Regestering!');
}
   
?>