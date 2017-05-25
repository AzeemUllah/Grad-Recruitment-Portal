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
	   $company= $_POST['company'];
	   $role= $_POST['role'];
	   $address= $_POST['address'];
	   $city= $_POST['city'];
	   $postal= $_POST['postal'];
	   $user_id= $_POST['user_id'];
	   
	   
		$sql = "INSERT INTO recruiter (user_id,firstname,lastname,email,company,role,address,city,postal_code) 
		VALUES ('" . $user_id . "','".$firstname."','".$lastname."','".$email."','" . $company . "','" . $role . "','" . 
		$address . "','" . $city . "','" . $postal . "')";
				
				if ($conn->query($sql) === TRUE) {
					$error = 0;
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