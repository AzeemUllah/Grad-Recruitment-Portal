<?php
/**
 * Created by PhpStorm.
 * User: Azeem Ullah
 * Date: 2/15/2017
 * Time: 12:52 AM
 */
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'graduate_recruit_db');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	
	
?>