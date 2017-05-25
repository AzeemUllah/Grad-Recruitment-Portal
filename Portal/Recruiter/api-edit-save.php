<?php
    session_start();
    include("api-config.php");
   $error=0;
	$noofopportunity = $_POST['hdnSession-opportunity-count'];
	echo $noofopportunity;
	//$noofprojects = $_POST['hdnSession-project-count'];
	
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$company = $_POST['companyname'];
	$department = $_POST['department'];
	$role = $_POST['role'];
	$website = $_POST['website'];
	//$about = $_POST['about'];
													
    $sql = "UPDATE recruiter SET firstname='".$firstName."', lastname='".$lastName."', email='".$email."', role='".$role."',company='".$company."' WHERE recruiter_id='". $_SESSION["recruiter_id"] ."'";
    if ($conn->query($sql) === TRUE) {
        $error=0;
    } else {
        $error=1;
    }
	
		$count = 1;
		foreach($_SESSION["takenOpportunity"] as $value) {
			$v1 = "type".$count;
			$v2 = "spec".$count;
			$v3 = "departhiring".$count;
			$v4 = "grade".$count;
			$v5 = "slots".$count;
			//echo "<br>" . $v1 . "<br>";
			$sql = "UPDATE opportunity SET type='".$_POST[$v1]."', spec='".$_POST[$v2]."',department='".$_POST[$v3]."',grade='".$_POST[$v4]."',slot='".$_POST[$v5]."' WHERE opportunity_id='". $value ."'";
			
			if ($conn->query($sql) === TRUE) {
				$error=0;
			} else {
				$error=1;
			}
			$count++;
			}
			
			for ($x = $count; $x < $noofopportunity; $x++) {
				$v1 = "type".$x;
			$v2 = "spec".$x;
			$v3 = "departhiring".$x;
			$v4 = "grade".$x;
			$v5 = "slots".$x;
			//echo "<br>" . $v1 . "<br>";
				$sql = "INSERT INTO opportunity (recruiter_id, type,spec,department,grade,slot) VALUES (".$_SESSION["recruiter_id"].",'".$_POST[$v1]."','".$_POST[$v2]."','".$_POST[$v3]."','".$_POST[$v4]."','".$_POST[$v5]."')";
				
				if ($conn->query($sql) === TRUE) {
					$error=0;
				} else {
					$error=1;
				}
				
			}
if ($error == 1){
	header('Location: edit.php?status=faliure&text=Error+updating!');
}
else if($error == 0){
	header('Location: edit.php?status=sucess&text=Update+sucessful!');
}
			
		?>