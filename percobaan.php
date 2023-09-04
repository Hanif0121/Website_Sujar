<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="111.css">
    <title>Sujar</title>
  </head>
  
<body>
<header class="header">
  <div class="header-inner">
    <div class="container-fluid px-lg-5">
      <nav class="navbar navbar-expand-lg my-navbar">
  <a class="navbar-brand" href="#"><span class="logo">
    <img src="" class="img-fluid" style="width:30px; margin:-3px 0px 0px 0px;">Sujar</span>
  </a>
  <div class="search-box">
  <form method="get"action="">
          <input type="text" name="cari" id="srch" placeholder="Search" required>
  </form>
  </div>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Change Account</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Semua</a>
          <a class="dropdown-item" href="#">Objek</a>
          <a class="dropdown-item" href="#">Planet</a>
          <a class="dropdown-item" href="#">Bintang</a>
          <a class="dropdown-item" href="#">Hal Lain</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="gambar/lobby.jpeg"  width="40px"alt="">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Username</a>
          <a class="dropdown-item" href="#">Nama</a>
          <a class="dropdown-item" href="#">Email</a>
          <a class="dropdown-item" href="#">Edit</a>
          <a class="dropdown-item" href="#">Profil</a>
        </div>
    </ul>
  </div>
</nav>

    </div>
  </div>


</header>
<br><br><br><br><br>
    <div class="body">
      <div class="h3">
        <h3 align="center">Materi Kami</h3>
        </div>
        <br><br>
       <table>
        <thead>
          <td>No</td>
          <td>Nama Video</td>
          <td>Video</td>
        </thead>
        <tr>
        <?php
        include "db_conn.php";
        $no=1;
        $query = mysqli_query($conn, "SELECT * FROM video");
        if (isset($_GET['cari'])){
          $query = mysqli_query($conn, "SELECT * FROM video where video_nama LIKE '%".$_GET['cari']."%'");
        }       
        $row=mysqli_num_rows($query);
              
          while($data = mysqli_fetch_array($query)){
          ?>
            <td><?php echo $data['video_nama'] ?></td>
            <td><video controls="true" width="300px">
                  <source src="Video/<?php echo $data['isi_video'];?>">
                </video></td>
        <?php  
          }
        echo"</tr>";
      
       ?>
        
       </table>
  
  </body>
</html>