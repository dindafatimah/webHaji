<?php
include'connect.php';
{
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
  margin:auto;
  width: 96%;
  padding: 15px;
}

table{
    padding: 15px;
    text-align: left;
}

td{
	color: black;
    padding: 15px;
}

#tabel-tampil-book{
        width:100%;
    }
    #tabel-tampil-book tr:nth-child(even){
        background-color:#86d4ac84;
    }
    #tabel-tampil-book tr{
        color:#ffffff;
        padding:25px;
    }
    #tabel-tampil-book td{
        border:1px solid #ffffff;
        border-radius: 10px;
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

.footer {
float: left;
	padding-bottom: 10px;
	padding-top: 10px;
	text-align: center;
	bottom: 0px;
	width: 100%;
}

      </style>
  </head>
  <body>
		
  <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active" style="background-color:#076b29">
				<h1><a href="index.php" class="logo">
          <img src="img/icon.png"
                style="width:60%">
        </a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
              <a href="berita.php"><span class="bi bi-newspaper"></span>BERITA</a>
          </li>
          <li>
            <a href="#"><span></span><br/><br/><br/></a>
          </li>
          <li>
            <a href="login.php"><span><i class="bi bi-box-arrow-in-right"></i></span>Admin</a>
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

<br />
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Berita Haji dan Umrah</h5>
    <p class="card-text">

<FORM CLASS="form-inline" METHOD="POST">
  <div align="right"><form method=post><input type="text" name="pencarian"><input type="submit" name="search" value="search" class="tombol"></form>
    </FORM>
    </div>
    <br />
	<table id="tabel-tampil-book">
		<tr>
			<th id="label-tampil-no"> </td>
			<th> </th>
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
				$sql = "SELECT * FROM berita WHERE berita LIKE '%$pencarian%'
                          OR tanggal LIKE '%$pencarian%'";
				
				$query = $sql;
				$queryJml = $sql;	
						
			}
			else {
				$query = "SELECT * FROM berita LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM berita";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM berita LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM berita";
			$no = $posisi * 1;
		}
		
    $result_set = $query->fetchAll();

		//$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_berita = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_berita)>0)
		{
		while($r_tampil_berita=mysqli_fetch_array($q_tampil_berita)){

		?>
		<tr>
      <td><p style="font-size:200%;"><?php echo $r_tampil_berita['judul']; ?></p>
          <p id='tanggal'><?php echo $r_tampil_berita['tanggal']; ?></p>
			    <p style="font-size:100%;"><?php echo $r_tampil_berita['berita']; ?></p>
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
		<div class="pagination" style="float: right; font-size: 20px; font-weight: bolder; color: rgb(145, 138, 138); letter-spacing: 5px;">		
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
</p>
</div>

</div>

<p>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pendaftaran Haji</h5>
        <p class="card-text">Klik disini untuk mendaftar Haji.</p>
        <a href="addanggotahaji.php" type= "button" class="btn btn-success">DAFTAR HAJI</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pendaftaran Umrah</h5>
        <p class="card-text">Klik disini untuk mendaftar Umrah.</p>
        <a href="addanggota.php" type="button" class="btn btn-success">DAFTAR UMRAH</a>
      </div>
    </div>
  </div>
</div>
</p>
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

?>