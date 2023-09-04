<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['Username']) && isset($_POST['Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Username']);
	$pass = validate($_POST['Password']);

	if (empty($uname)) {
		header("Location: login.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM `user` WHERE `Username`='$uname' AND `Password`='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Username'] == $uname && $row['Password'] == $pass) {
            	$_SESSION['Username'] = $row['Username'];
				$_SESSION['Nama'] = $row['Nama'];
            	$_SESSION['ID'] = $row['id'];
				$_SESSION['logged_in_user_id'] = '1';
            	header("Location: lobby.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}