<?php
include'connect.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Website Travel Haji</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="icon" href="img/icon.png" type="image/icon type">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

		<link rel="stylesheet" href="style.css">

  <style>

    .content{
      text-align: left;
    }

  </style>

  </head>
  <body>
		
  <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active" style="background-color:#076b29">
				<h1><a href="admin-page.php" class="logo">
          <img src="img/icon.png"
                style="width:60%">
        </a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="anggota.php"><span class="bi bi-person-lines-fill"></span>Peserta</a>
          </li>
          <li>
              <a href="berita.php"><span class="bi bi-newspaper"></span>BERITA</a>
          </li>
          <li>
            <a href="#"><span></span><br/><br/><br/></a>
          </li>
          <li>
            <a href="log/logout.php"><span><i class="bi bi-box-arrow-left"></i></span>Logout</a>
          </li>
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
        <div class="footer">
          <p style="font-weight: bolder;">WEBSITE TRAVEL HAJI INDONESIA</p>
          <br />
          <br />
        	<p>TRAVEL HAJI INDONESIA</p>
          <p>Jl. Hijaiyah No 11,</p>
          <p>Telp: (021)55555555</p>
        </div>
    	</nav>

        <!-- NAVBAR  -->
        <div id="content" class="p-4 p-md-5">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <button type="button" id="sidebarCollapse" class="btn btn-success">
      <i class="fa fa-bars"></i>
      <span class="sr-only">Toggle Menu</span>
    </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
            <a class="nav-link" href="addanggotahaji.php">PENDAFTARAN HAJI</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="addanggota.php">PENDAFTARAN UMRAH</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
         <br />

        <!-- Page Content  -->

        
<h1>Tambah Berita</h1>

<div class="content">

<form action="process/berita-input.php" method="POST" enctype="multipart/form-data" class="was-validated">
  <div class="col-auto">
  <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Judul</label>
    <input type="text" class="form-control is-invalid" id="validationTextarea" name="judul" placeholder="Judul" required></textarea>
    <div class="invalid-feedback">
    Judul tidak boleh kosong.
    </div>
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Tanggal</label>
    <input type="text" class="form-control is-invalid" id="validationTextarea" name="tanggal" placeholder="dd/mm/yyyy" required></textarea>
    <div class="invalid-feedback">
    Tanggal tidak boleh kosong.
    </div>
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Berita</label>
    <textarea type="longtext" class="form-control is-invalid" id="validationTextarea" name="berita" placeholder="Berita" required></textarea>
    <div class="invalid-feedback">
    Berita tidak boleh kosong.
    </div>
    <br />
    <div class="mb-3">
    <button name="simpan" value="Simpan" class="btn btn-success" type="submit" onclick = "return confirm ('Apakah Anda Yakin Akan Menambahkan Berita Ini?')">Add</button>
  </div>
  </div>

        </div>
      </div>
		</div>

    <script src="sidebar/js/jquery.min.js"></script>
    <script src="sidebar/js/popper.js"></script>
    <script src="sidebar/js/bootstrap.min.js"></script>
    <script src="sidebar/js/main.js"></script>


    

  </body>

</html>

<?php
}
else {
	echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
	header('location:login.php');
}
?>