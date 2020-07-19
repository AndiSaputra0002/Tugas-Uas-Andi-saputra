<?php 
mysql_connect("localhost","root","");
mysql_select_db("data_joki");
?>
<?php 
include 'koneksi.php';
?>
 
<h3>Form Pencarian </h3>
 
<form action="indexx.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Squad</th>
		<th>Tarif joki</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from data_penjoki where nama_penjoki like '%".$cari."%'");				
	}else{
		$data = mysql_query("select * from data_penjoki");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama_penjoki']; ?></td>
		<td><?php echo $d['squad']; ?></td>
		<td><?php echo $d['tarif_joki']; ?></td>
	</tr>
	<?php } ?>
</table>
<a href="index.html">Dashboard</a>