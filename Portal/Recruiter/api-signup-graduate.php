<?php
/**
 * Created by PhpStorm.
 * User: Azeem Ullah
 * Date: 2/15/2017
 * Time: 12:48 AM
 */
    session_start();
   include("api-config.php");
$error = 0;


   if($_SERVER["REQUEST_METHOD"] == "POST") {
       // username and password sent from form

       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
	   $email= $_POST['email'];
	   $website= $_POST['website'];
	   $user_id= $_POST['user_id'];
	   
	   
		$sql = "INSERT INTO graduate (user_id,firstname,lastname,email,website) VALUES ('" . $user_id . "','".$firstname."','".$lastname."','".$email."','" . $website . "')";
				
				if ($conn->query($sql) === TRUE) {
					header("location: login.php");	
				} else {
					$error = 1;
				}
			
   }
																
	  if ($error == 1){
	header('Location: signup.php?status=faliure&text=Error+updating!');
}
	else if($error == 0){
	header('Location: login.php?status=sucess&text=Update+sucessful!');
} 
   
   
?>