<?php
include'connect.php';
{
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.png";
			else
				$foto = $r_tampil_anggota['foto'];
?>
<div id="label-page"><h3>Kartu Peserta</h3></div>
<div id="content">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">FOTO</td>
			<td class="isian-formulir">
			<img src="images/<?php echo $foto; ?>" width=70px height=75px>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">ID Peserta</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['idanggota']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Travel</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['travel']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['nama']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Domisili</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['alamat']; ?></td>
		</tr>
	</table>
</div>
<script>
	window.print();
</script>

<?php
}

?>