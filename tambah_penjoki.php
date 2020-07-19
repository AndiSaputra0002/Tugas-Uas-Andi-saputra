<?php
error_reporting(E_ALL);

$title = 'Data Penjoki';
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
	$nama_penjoki = $_POST['nama_penjoki'];
	$squad = $_POST['squad'];
	$tarif_joki = $_POST['tarif_joki'];
	$file_gambar = $_FILES['file_gambar'];
	$gambar = null;

	if ($file_gambar['error'] == 0)
	{
		$filename = str_replace(' ', '_', $file_gambar['name']);
		$destination = dirname(__FILE__) . '/gambar/' . $filename;
		if (move_uploaded_file($file_gambar['tmp_name'], $destination))
		{
			$gambar = 'gambar/' . $filename;;
		}
	}
	$sql = 'INSERT INTO data_penjoki (nama_penjoki, squad, tarif_joki, gambar) ';
	$sql .= "VALUE ('{$nama_penjoki}', '{$squad}', '{$tarif_joki}', '{$gambar}')";
	$result = mysqli_query($conn, $sql);

	header('location: data_penjoki.php');
}

include_once 'header.php';
?>

<h2>Tambah penjoki</h2>
<form method="post" action="tambah_penjoki.php" enctype="multipart/form-data">
	<div class="input">
	<label>Nama Penjoki</label>
	<input type="text" name="nama_penjoki" />
</div>
<div class="input">
	<label>squad</label>
	<select name="squad">
		<option value="RRQ">RRQ</option>
		<option value="Evos">Evos</option>
		<option value="Onic">Onic</option>
		<option value="Public">Public</option>
	</select>
</div>
<div class="input">
	<label>tarif joki</label>
	<input type="text" name="tarif_joki" />
<div class="input">
	<label>File Gambar</label>
	<input type="file" name="file_gambar" />
</div>
<div class="submit">
	<input type="submit" name="submit" value="Simpan" />
</div>
</form>
<?php
include_once 'footer.php';
?>