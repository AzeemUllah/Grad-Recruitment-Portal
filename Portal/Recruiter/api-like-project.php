<?php
    session_start();
    include("api-config.php");
   
	$pid = $_GET['pid'];
	$uid = $_GET['uid'];
	
	
			$error=0;											
    $sql = "INSERT INTO likes (project_id,user_id) VALUES ('".$_GET['pid']."','".$_GET['uid']."')";
    if ($conn->query($sql) === TRUE) {
        $error=0;	
    } else {
        $error=1;	
    }
		if ($error == 1){
	header("Location: ".$_SESSION['previous_page']."&status=faliure&text=Error+updating!");
}
	else if($error == 0){
	header("Location: ".$_SESSION['previous_page']."&status=sucess&text=Update+sucessful!");
}
?>