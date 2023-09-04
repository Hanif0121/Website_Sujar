<?php 
include "db_conn.php";

if(isset($_POST['Nama']) && 
   isset($_POST['Tanggal-Lahir']) && 
   isset($_POST['Jenis-Kelamin']) && 
   isset($_POST['Email']) &&
   isset($_POST['Username']) && 
   isset($_POST['Password'])&&
   isset($_POST['Image'])){

    $Nama = $_POST['Nama'];
    $TL = $_POST['Tanggal-Lahir'];
    $JK = $_POST['Jenis-Kelamin'];
	$Email = $_POST['Email'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
	$file = addcslashes(file_get_contents($_FILES["Image"]["pp"]));

    $data = "Nama=".$Nama."&Tanggal-Lahir=".$TL."&Jenis-Kelamin=".$JK."&Email=".$Email."&Username=".$Username;
    if (empty($Nama)) {
    	$em = "Full name is required";
    	header("Location:registrasi.php?error=$em&$data");
	    exit;
	}else if(empty($TL)){
			$em = "User Tanggal Lahir is required";
			header("Location: registrasi.php?error=$em&$data");
			exit;
	}else if(empty($JK)){
    	$em = "User Jenis Kelamin is required";
    	header("Location: registrasi.php?error=$em&$data");
	    exit;
    }else if(empty($Email)){
    	$em = "User Email is required";
    	header("Location: registrasi.php?error=$em&$data");
	    exit;
    }else if(empty($Username)){
    	$em = "User name is required";
    	header("Location: registrasi.php?error=$em&$data");
	    exit;

	}else if(empty($Password)){
    	$em = "Password is required";
    	header("Location: registrasi.php?error=$em&$data");
	    exit;
	}else {

    	// hashing the password
    	$Password =md5($Password);
	}
    $query = "INSERT INTO `user`(`Nama`,`Tanggal-Lahir`,Jenis-Kelamin,`Email`,`Username`,`Password`,`Image`) VALUES ('$Nama',$TL','$JK','$Email','$Username','$Password','$file')";
	$query_run = mysqli_query($conn,$query);
        if( $query ){
        header('Location: login.php?status=sukses');
        }else {
        header('Location: login.php?status=gagal');
        }
	exit;
}else{
	die("Akses dilarang...");
	exit;
}
?>