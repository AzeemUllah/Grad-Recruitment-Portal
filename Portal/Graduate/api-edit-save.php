<?php
    session_start();
    include("api-config.php");
	$status=0;
	$noofdegree = $_POST['hdnSession-degree-count'];
	$noofprojects = $_POST['hdnSession-project-count'];
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$about = $_POST['about'];
													
    $sql = "UPDATE graduate SET firstname='".$firstName."', lastname='".$lastName."', email='".$email."', website='".$website."', about='".$about."' WHERE graduate_id='". $_SESSION["graduate_id"] ."'";
    if ($conn->query($sql) === TRUE) {
        echo "sucessful";
    } else {
        $error=1;
    }

		$count = 1;
		foreach($_SESSION["takenDegree"] as $value) {
			$v1 = "degree-type".$count;
			$v2 = "degree-specs".$count;
			$v3 = "institution".$count;
			$v4 = "degree-grade".$count;
			//echo "<br>" . $v1 . "<br>";
			$sql = "UPDATE degree_details SET degree_type='".$_POST[$v1]."', course_name='".$_POST[$v2]."',institution='".$_POST[$v3]."',grade='".$_POST[$v4]."' WHERE degree_id='". $value ."'";
			
			if ($conn->query($sql) === TRUE) {
				echo "sucessful";
			} else {
				$error=1;
			}
			$count++;
			}
			
			for ($x = $count; $x < $noofdegree; $x++) {
				$v1 = "degree-type".$x;
				$v2 = "degree-specs".$x; 
				$v3 = "institution".$x;
				$v4 = "degree-grade".$x;
				//echo "<br>" . $v1 . "<br>";
				$sql = "INSERT INTO degree_details (graduate_id, degree_type,course_name,institution,grade) VALUES (".$_SESSION["graduate_id"].",'".$_POST[$v1]."','".$_POST[$v2]."','".$_POST[$v3]."','".$_POST[$v4]."')";
				
				if ($conn->query($sql) === TRUE) {
					echo "sucessful";
				} else {
					$error=1;
				}
				
			}

			
			
			
			
			print_r($_SESSION["takenProject"]);
			$count = 1;
		foreach($_SESSION["takenProject"] as $value) {
			$v1 = "project-tittle".$count;
			$v2 = "project-type".$count;
			$v3 = "skills-gained".$count;
			$v4 = "project-image".$count;
			//$temp = $v4;
			
			//$temp = $_POST[$v4];
			
	
			
			
			
			//echo "<br>" . $v1 . "<br>";
			
			
			if (empty($_FILES[$v4]['name'])) {
			echo "empty" . $v4 . "   ";
		}
		else{
			
						$target_dir = "uploads/";
						$target_file = $target_dir . basename($_FILES[$v4]["name"]);
						$uploadOk = 1;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES[$v4]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".";
								$uploadOk = 1;
							} else {
								echo "File is not an image.";
								$uploadOk = 0;
								
							}
						}

						$extension=end(explode(".", $target_file));
						if ($uploadOk == 0) {
							echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
							if (move_uploaded_file($_FILES[$v4]["tmp_name"], "uploads/".$value.".".$extension)) {
								echo "The file ". basename( $_FILES[$v4]["name"]). " has been uploaded.";
							} else {
								$error=1;
							}
						}
			
			
			$v4 = "uploads/".$value.".".$extension;
			
			
			
			
			$sql = "UPDATE project_experience SET title='".$_POST[$v1]."', type='".$_POST[$v2]."',skill_gained='".$_POST[$v3]."',project_image='".$v4."' WHERE project_id='". $value ."'";
			
			if ($conn->query($sql) === TRUE) {
				echo "P.U sucessful <br>";
				
			} else {
				$error=1;
			}
			
			
			
			
			
			
			
			
			
			}
			
			$count++;
		}
			
			
			for ($x = $count; $x < $noofprojects; $x++) {
				$v1 = "project-tittle".$x;
				$v2 = "project-type".$x;
				$v3 = "skills-gained".$x;
				$v4 = "project-image".$x;
				
				$sql = "INSERT INTO project_experience (graduate_id,title,type,skill_gained) VALUES (".$_SESSION["graduate_id"].",'".$_POST[$v1]."','".$_POST[$v2]."','".$_POST[$v3]."')";
				if ($conn->query($sql) === TRUE) {
					$last_id = $conn->insert_id;
				} else {
					$error=1;
				}
				
				
				
				
				
				
				
				if (empty($_FILES[$v4]['name'])) {
			echo "empty" . $v4 . "   ";
		}
		else{
			
						$target_dir = "uploads/";
						$target_file = $target_dir . basename($_FILES[$v4]["name"]);
						$uploadOk = 1;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES[$v4]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".";
								$uploadOk = 1;
							} else {
								echo "File is not an image.";
								$uploadOk = 0;
							}
						}

						$extension=end(explode(".", $target_file));
							
						if ($uploadOk == 0) {
							echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
						if (move_uploaded_file($_FILES[$v4]["tmp_name"], "uploads/".$last_id.".".$extension)) {
								echo "The file ". basename( $_FILES[$v4]["name"]). " has been uploaded.";
							} else {
								$error=1;
							}
						}
			
			
			$v4 = "uploads/".$last_id.".".$extension;
			
			
			
			$sql = "UPDATE project_experience SET title='".$_POST[$v1]."', type='".$_POST[$v2]."',skill_gained='".$_POST[$v3]."',project_image='".$v4."' WHERE project_id='". $last_id ."'";
			
			if ($conn->query($sql) === TRUE) {
				echo "sucessful";
			} else {
				$error=1;
			}
			
			}
				
				
				
				
				
				
				
				
				
			}
			
/*
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["project-image1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["project-image1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

$extension=end(explode(".", $target_file));
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["project-image1"]["tmp_name"], "uploads/1.".$extension)) {
        echo "The file ". basename( $_FILES["project-image1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


*/
if ($error == 1){
	header('Location: edit.php?status=faliure&text=Error+updating!');
}
else if($error == 0){
	header('Location: edit.php?status=sucess&text=Update+sucessful!');
}

?>