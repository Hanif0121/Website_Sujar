<?php
include 'db_conn.php';
function upload(){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];



    // cek apakah gambar yg di upload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));


    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {

        echo "<script>
            alert('Anda tidak mengupload gambar')
        </script>";
        return false;
    }
    // cek jika ukuran terlalu besar
    if ($ukuranfile > 2000000) {

        echo "<script>
            alert('ukuran gambar terlalu besar')
        </script>";
        return false;
    }
    // lolos pengecekan gambar siap di upload
    // generate nama baru gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpname, './Gambar/' . $namaFileBaru);

    return $namaFileBaru;
}


function tambah($data){
    global $conn;

    $Nama = $_POST['Nama'];
	$TL = $_POST['TL'];
    $JK = $_POST['JK'];
    $Email = $_POST['Email'];
	$Username = $_POST['Username'];
    $Password = md5($_POST['Password']);

    $gambar = upload();
    if (!$gambar) {
        return  false;
    }

    

    // query insert data
    $sql = "INSERT INTO `user` VALUES ('', '$Nama', '$TL', '$JK', '$Email', '$Username', '$Password', '$gambar')";
    $query=mysqli_query($conn, $sql);    
    return mysqli_affected_rows($conn);

}
?>