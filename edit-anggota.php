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

		<link rel="stylesheet" href="sidebar/css/style.css">

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


        <!-- Page Content  -->

        <?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.png";
			else
				$foto = $r_tampil_anggota['foto'];
?>
        
<h1>Edit Data Peserta</h1>

<div class="content">

<form action="process/anggota-edit.php" method="POST" enctype="multipart/form-data" class="was-validated">

<tr>
  <div class="col-auto">
<div>
  <label class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Foto</label>
  <br />
  <br />
  <img src="images/<?php echo $foto; ?>" width=70px height=75px>
  <input type="file" name="foto" ></input>
  <input type="hidden" name="foto_awal" value="<?php echo $r_tampil_anggota['foto']; ?>">
  </div>
  <br />
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">ID</label>
    <input type="text" class="form-control" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly"></input>
    <br />
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Travel</label>
    <br />
    <br />
    <?php
			if($r_tampil_anggota['travel']=="Haji")
			{
				echo "<td class='isian-formulir'><input type='radio' name='travel' value='haji' checked>Haji</label></td>
				<br />
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='travel' value='Umrah'>Umrah</td>";
			}
			elseif($r_tampil_anggota['travel']=="Umrah")
			{
				echo "<td class='isian-formulir'><input type='radio' name='travel' value='Umrah' checked>Umrah</label></td>
					<br />
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='travel' value='haji'>haji</td>";
			}
			?>
        <br />
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Nama</label>
    <input type="text" class="form-control is-invalid" id="validationTextarea" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>"></input>
    <div class="invalid-feedback">
    Nama tidak boleh kosong.
    </div>
    <br />
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Jenis Kelamin</label>
    <br />
    <br />
    <?php
			if($r_tampil_anggota['jeniskelamin']=="Laki-laki")
			{
				echo "<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Laki-laki' checked>Laki-laki</label></td>
				<br />
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Perempuan'>Perempuan</td>";
			}
			elseif($r_tampil_anggota['jeniskelamin']=="Perempuan")
			{
				echo "<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Perempuan' checked>Perempuan</label></td>
					<br />
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Laki-laki'>Laki-laki</td>";
			}
			?>
        <br />
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Domisili</label>
    <textarea type="text" class="form-control is-invalid" id="validationTextarea" name="alamat"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
    <div class="invalid-feedback">
    Domisili tidak boleh kosong.
    </div>
    <br />
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Status</label>
    <br />
    <br />
    <div class="form-check" align="left";>
    <tr>			
			<?php
			if($r_tampil_anggota['status']=="Diterima")
			{
				echo "<td class='isian-formulir'><input type='radio' name='status' value='Diterima' checked>Diterima</label></td>
					</tr>
		<tr>
    <br />
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='status' value='Cadangan'>Cadangan</td>
      </tr>
      <tr>
      <br />
      <td class='label-formulir'></td>
      <td class='isian-formulir'><input type='radio' name='status' value='Tidak Diterima'>Tidak diterima</td>";
      }
			elseif($r_tampil_anggota['status']=="Cadangan")
			{
				echo "<td class='isian-formulir'><input type='radio' name='status' value='Diterima'>Diterima</label></td>
					</tr>
		<tr>
    <br />
			<td class='label-formulir'></td>
      <td class='isian-formulir'><input type='radio' name='status' value='Cadangan' checked>Cadangan</td>
      </tr>
      <tr>
      <br />
      <td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='status' value='Tidak diterima'>Tidak diterima</td>";
			}
      elseif($r_tampil_anggota['status']=="Tidak diterima")
			{
				echo "<td class='isian-formulir'><input type='radio' name='status' value='Diterima'>Diterima</label></td>
					</tr>
		<tr>
    <br />
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='status' value='Cadangan'>Cadangan</td>
      </tr>
      <tr>
      <br />
      <td class='label-formulir'></td>
      <td class='isian-formulir'><input type='radio' name='status' value='Tidak diterima' checked>Tidak diterima</td>";
			}
			?>
		</tr>
    <br />
    <br />
    <div class="mb-3">
    <button name="simpan" value="simpan" class="btn btn-primary" type="submit" onclick = "return confirm ('Apakah Anda Yakin Akan Mengubah Data Peserta?')">Edit</button>
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