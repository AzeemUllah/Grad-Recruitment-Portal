<?php
    session_start();
    include("api-config.php");
    
	$error=0;
   
    $contactname = $_POST['contact-name'];
	$contactemail = $_POST['contact-email'];
	$contactmessage = $_POST['contact-message'];
	$contactsenderid = $_POST['contact-sender-id'];
	$contactreciverid = $_POST['contact-reciver-id'];
	
	
	
	$sql = "INSERT INTO messeges(sender_id, receiver_id,name,email,messeges) VALUES ('".$contactsenderid."','" . $contactreciverid . "','" . $contactname . "','" . $contactemail . "','" . $contactmessage . "')";
	
	if ($conn->query($sql) === TRUE) {
		$error=0;
	} else {
		$error=1;
	}

	
	if ($error == 1){
		header('Location: messeges.php?status=faliure&text=Error+updating!');
	}
	else if($error == 0){
		header('Location: messeges.php?status=sucess&text=Update+sucessful!');
	}

?>