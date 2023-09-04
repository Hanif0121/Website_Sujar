<?php
session_start();
if (insset($_SESSION['id']) && insset($_SESSION['Nama']))
    include 'db_conn.php'
    include 'user.php';
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
    	
    	<form action="signup.php"   method="post">
    		<h1 align="center">Edit Ptofile</h1><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <div class="mb-3">
		   <p> <label for="Nama">Nama Lengkap</label></p>
		    <input type="text" name="Nama" value="<?php echo (isset($_GET['Nama']))?$_GET['Nama']:"" ?>">
		  </div>

		  <div class="mb-3">
		   <p> <label for="Tanggal-Lahir">Tanggal Lahir</label></p>
		    <input type="date" class="form-control"
         name="Tanggal-Lahir"
		           value="<?php echo (isset($_GET['Taggal-Lahir']))?$_GET['Tanggal-Lahir']:"" ?>">
		  </div>

		  <div class="mb-3">
		   <p> <label for="Jenis-Kelamin">Jenis Kelamin</label></p>
		    <input type="text" 
		           class="form-control"
		           name="Jenis-Kelamin">
		  </div>
		  
		  <div class="mb-3">
		   <p> <label for="Email">Email</label><p>
		    <input type="text" 
		           class="form-control"
		           name="Email">
		  </div>

		  <div class="mb-3">
		  <p>  <label for="Username">Username</label><p>
		    <input type="text" 
		           class="form-control"
		           name="Username">
		  </div>

		  <div class="mb-3">
		   <p> <label for="Password">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="Password">
		  </div>

		  <div class="mb-3">
		   <p> <label for="Image">Foto Profil</label>
		    <input type="file" 
		           class="form-control"
		           name="Image">
		  </div>

		  <button type="submit" class="btn btn-primary">Sign Up</button>
		</form>
    </div>
</body>
</html>