<?php
    session_start();
    include("api-config.php");
   
	$pid = $_GET['project_id'];
	
	
	
				$error=0;									
    $sql = "delete from project_experience where project_id = '".$pid."'";
    if ($conn->query($sql) === TRUE) {
        $error=0;
    } else {
        $error=1;
    }
	
	
	if ($error == 1){
	header("Location: edit.php?status=faliure&text=Error+updating!");
}
	else if($error == 0){
	header("Location: edit.php?status=sucess&text=Update+sucessful!");
}
?>