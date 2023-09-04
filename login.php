<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="Login99.css">
</head>
<body>
<div class="vid-container">
  <video class="bgvid" autoplay="autoplay" muted="muted" preload="auto" loop>
      <source src="background-video/login1.mp4" type="video/mp4">
  </video>
  <form action="loginup.php" method="POST">
  <div class="inner-container">
    <video class="bgvid inner" autoplay="autoplay" muted="muted" preload="auto" loop>
      <source src="background-video/login1.mp4?random=1" type="video/mp4">
    </video>
    <div class="box">
      <h1>Login</h1>
      <input type="text" name="Username" placeholder="Username"/>
      <input type="password" name="Password" placeholder="Password"/>
      <button>Login</button>
      <p>Not a member? <span><a href="registrasi.php">Sign Up</a></span></p>
    </div>
  </div>
</form>
</div>
</body>
</html>