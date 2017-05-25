<?php
    session_start();
    include("api-config.php");
    
	$error=0;
   
    $contactname = $_POST['contact-name'];
	$contactemail = $_POST['contact-email'];
	$contactmessage = $_POST['contact-message'];
	$contactsenderid = $_POST['contact-sender-id'];
	$contactreciveridraw = $_POST['contact-reciver-id'];
	$contactreciverid="";
	
	if($_GET['recieverType']=='graduate'){
		$sql = "SELECT * FROM graduate where graduate_id = '" . $contactreciveridraw . "'";
		$result = $conn->query($sql);
									
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$contactreciverid=$row['user_id'];
			}
		} else {
			$error=1;
		}
	}
	
	if($_GET['recieverType']=='recruiter'){
		$sql = "SELECT * FROM recruiter where recruiter_id = '" . $contactreciveridraw . "'";
		$result = $conn->query($sql);
							
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$contactreciverid=$row['user_id'];
			}
		} else {
			$error=1;
		}
	}
	
	
	
	$sql = "INSERT INTO messeges(sender_id, receiver_id,name,email,messeges) VALUES ('".$contactsenderid."','" . $contactreciverid . "','" . $contactname . "','" . $contactemail . "','" . $contactmessage . "')";
	
	if ($conn->query($sql) === TRUE) {
		$error=0;
	} else {
		$error=1;
	}

	
	if ($error == 1){
		header('Location: profile-graduate.php?id=10&status=faliure&text=Error+updating!');
	}
	else if($error == 0){
		header('Location: profile-graduate.php?id=10&status=sucess&text=Update+sucessful!');
	}

?>