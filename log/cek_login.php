<?php
session_start();
$_SESSION['sesi'] = NULL;

include "../connect.php";
	if( isset($_POST['submit']))
	{
			$user	= isset($_POST['user']) ? $_POST['user'] : "";
			$pass	= isset($_POST['pass']) ? $_POST['pass'] : "";
			$qry	= mysqli_query($db,"SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
			$sesi	= mysqli_num_rows($qry);

			if ($sesi == 1)
			{
				$data_admin				= mysqli_fetch_array($qry);
				$_SESSION['idadmin'] 	= $data_admin['idadmin'];
				$_SESSION['sesi'] 		= $data_admin['nm_admin'];
				
				echo "<script>alert('Anda berhasil Log In');</script>";
				echo "<meta http-equiv='refresh' content='0; url=../admin-page.php?user=$sesi'>";
			}
			else
			{
				echo "<meta http-equiv='refresh' content='0; url=../admin-page.php'>";
				echo "<script>alert('Anda Gagal Log In');</script>";
			}
		
		
	}
	else
	{
	  include "../admin-page.php";
	}
?>
