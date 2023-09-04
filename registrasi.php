<?php
require 'signup-check.php';
if(isset($_POST["upload"])){
	if( tambah($_POST) < 0){
        echo "
            <script>
                alert  ('tidak ada data yang diubah!');
                document.location.href = 'login.php';
            </script>
        ";
    } else {
        echo "<script>
        alert  ('data berhasil diubah!');
        document.location.href = 'login.php';
    </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Sig In.css">
</head>
<body>
    <div class="sigin">
    	
		<h1 align="center">Sign Up</h1><br>
	<form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-2"> 
                    <label for="" class="form-label">Nama</label> <br>
					<input type="text" name="Nama"  required>
                </div>
                <div class="mb-2">
					<label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="TL" required>
                </div>
				<div class="mb-2">
					<label for="" class="form-label">Jenis Kelamin</label> <br>
					<input type="radio"  name="JK" Value="Laki-Laki" required>Laki-Laki <br>
					<input type="radio"  name="JK" Value="Perempuan" required>Perempuan
				</div>
				<div class="mb-2">
					<label for="" class="form-label">Email</label>
					<input type="text" class="form-control" name="Email" required>
				</div>
				<div class="mb-2">
					<label for="" class="form-label">Username</label>
					<input type="text" class="form-control" name="Username" required>
				</div>
				<div class="mb-2">
					<label for="" class="form-label">Password</label>
					<input type="password" class="form-control" name="Password" required>
				</div>
				<div class="mb-2">
					<label for="" class="form-label">Gambar</label>
					<input type="file" class="form-control" name="gambar" required>
				</div>
                <div class="mb-2">
					<button type="submit" class="btn btn-success" name="upload">Kirim</button>
                </div>
			</form>
    </div>
</body>
</html>z
