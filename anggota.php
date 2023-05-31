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
  margin:auto;
  width: 96%;
  padding: 15px;
}

table{
    padding: 15px;
}

td{
	color: black;
    padding: 15px;
}
.pagination a.active {
  color: rgb(134, 212, 172);
}

    .pagination a:hover:not(.active) {
        background-color: rgba(134, 212, 150, 0.338);
        color: rgb(5, 77, 43);
        border-radius: 80px;
        padding: 2px;
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
    <div class="content">
    <h1>Data Peserta</h1>
	<a target="_blank" href="print-anggota.php">Print Halaman</a>
  <br />
  <br />

  <FORM CLASS="form-inline" METHOD="POST">
  <div align="right"><form method=post><input type="text" name="pencarian"><input type="submit" name="search" value="search" class="tombol"></form>
    </FORM>
    </div>
    <br />
	<table id="tabel-tampil-book">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID</th>
			<th>Travel</th>
			<th>Nama</th>
			<th>Foto</th>
			<th>Jenis Kelamin</th>
			<th>Domisili</th>
			<th>Status</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		

		
		<?php
		$batas = 5;
		extract($_GET);
		if(empty($hal)){
			$posisi = 0;
			$hal = 1;
			$nomor = 1;
		}
		else {
			$posisi = ($hal - 1) * $batas;
			$nomor = $posisi+1;
		}	
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
			if($pencarian != ""){
				$sql = "SELECT * FROM tbanggota WHERE nama LIKE '%$pencarian%'
						OR idanggota LIKE '%$pencarian%'
						OR jeniskelamin LIKE '%$pencarian%'
						OR alamat LIKE '%$pencarian%'
						OR travel LIKE '%$pencarian%'";
				
				$query = $sql;
				$queryJml = $sql;	
						
			}
			else {
				$query = "SELECT * FROM tbanggota LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tbanggota";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tbanggota LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tbanggota";
			$no = $posisi * 1;
		}
		
		//$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_anggota)>0)
		{
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
			if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.png";
			else
				$foto = $r_tampil_anggota['foto'];
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
			<td><?php echo $r_tampil_anggota['travel']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><img src="images/<?php echo $foto; ?>" width=70px height=70px></td>
			<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_anggota['alamat']; ?></td>
			<td><?php echo $r_tampil_anggota['status']; ?></td>
			<td>
				<a class="btn btn-primary btn-sm"target="_blank" href="print-kartu-anggota.php?id=<?php echo $r_tampil_anggota['idanggota'];?>" class="tombol">Cetak Kartu</a></div>
				<a class="btn btn-warning btn-sm"href="edit-anggota.php?id=<?php echo $r_tampil_anggota['idanggota'];?>" class="tombol">Edit</a></div>
                <a class="btn btn-danger btn-sm" href="process/anggota-delete.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="tombol">Hapus</a></div>
			</td>			
		</tr>		
		<?php $nomor++; } 
		}
		else {
			echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
		}?>		
	</table>
	<?php
	if(isset($_POST['pencarian'])){
	if($_POST['pencarian']!=''){
		echo "<div style=\"float:left;\">";
		$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
		echo "Data Hasil Pencarian: <b>$jml</b>";
		echo "</div>";
	}
	}
	else{ ?>
		<div style="float: left;">		
		<?php
			$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
			echo "Jumlah Data : <b>$jml</b>";
		?>			
		</div>		
		<div class="pagination" style="float: right; font-size: 20px; font-weight: bolder; color: #53f09f); letter-spacing: 5px;">		
				<?php
				$jml_hal = ceil($jml/$batas);
				for($i=1; $i<=$jml_hal; $i++){
					if($i != $hal){
						echo "<a href=\"?p=booklist&hal=$i\"> $i </a>";
                        echo "<br />";
					}
					else {
						echo "<a class=\"active\"> $i </a>";
                        echo "<br />";
					}
				}
				?>
		</div>
	<?php
	}
	?>
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