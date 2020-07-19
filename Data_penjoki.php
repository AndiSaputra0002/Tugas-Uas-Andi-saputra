<?php

$title = 'Data Penjoki';
include_once 'koneksi.php';

$sql = 'SELECT * FROM data_penjoki';
$result = mysqli_query($conn, $sql);

include_once 'header.php';

echo '<a href="tambah_penjoki.php">tambah_penjoki</a>';
if ($result):
?>
		<table>
			<tr>
				<th>Gambar</th>
				<th>Nama Penjoki</th>
				<th>Squad</th>
				<th>Tarif joki</th>
				<th>Aksi</th>
			</tr>

		<?php while($row = mysqli_fetch_array($result)): ?>
			<tr>
				<td><?php echo "<img src=\"{$row['gambar']}\" />";?></td>
				<td><?php echo $row['nama_penjoki'];?></td>
				<td><?php echo $row['squad'];?></td>
				<td><?php echo $row['tarif_joki'];?></td>
				<td>
					<a href="edit_penjoki.php?id=<?php echo $row['id_joki'];?>">Edit</a>
					<a href="hapus_penjoki.php?id=<?php echo $row['id_joki'];?>">Delete</a>
				</td>
			</tr>
		<?php endwhile; ?>
		</table>
<?php
endif;
include_once 'footer.php';
?>
<a href="index.html">Dashboard</a>