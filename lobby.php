
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Lobby.css">
    <title>Sujar</title>
</head>
<body>
<header class="header">
  <div class="header-inner">
    <div class="container-fluid px-lg-5">
      <nav class="navbar navbar-expand-lg my-navbar">
  <a class="navbar-brand" href="#"><span class="logo">
    <img src="" class="img-fluid" style="width:30px; margin:-3px 0px 0px 0px;">Sujar
  </span>
  </a>
  <div class="search-box">
  <form method="GET"action="">
          <input type="text" name="cari" id="srch" placeholder="Search" required>
  </form>
  </div>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="lobby.php" style="color : #9a86fd;" >Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about_lobby.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    
  </div>
</headear>
<br><br><br><br><br><br><br>
<br><br><br>
<div class="select">
<select name="links" id="" onchange="window.location.href=this.value;" >
  <option value="index.php">Semua</option>
  <option value="option1_lobby.php">Objek</option>
  <option value="option2_lobby.php">Bintang</option>
  <option value="option3_lobby.php">Planet</option>
</select>
</div>

<br><br><br><br><br><br>

<table>
  <tr>
    <th width="500px">Nama Video</th>
    <th width="500px">Video</th>
    <th width="500px">Kuis</th>
  </tr>
<?php
include "db_conn.php";
$query = mysqli_query($conn, "SELECT * FROM video");
if (isset($_GET['cari'])){
  $query = mysqli_query($conn, "SELECT * FROM video where video_nama  LIKE '%".$_GET['cari']."%'");
}       
while($data = mysqli_fetch_array($query)){
?>
  <tr>
   <td class="nama"><?php echo $data['video_nama'] ;?></td>
   <td class="video">
  <video controls="true" width="300px">
          <source src="Video/<?php echo $data['isi_video'];?>">
  </video>
</td>
<td>
<div class="kuis"> 
                <div class="outer button">
                <button><a href="<?php echo $data['kuis_video'];?>">Kuis</a></button>
                  <span></span>
                  <span></span>
                </div>
</div>
</td>
</tr>

  <?php
  }
  ?>
  </table>
</body>
</html>
