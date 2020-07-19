<?php
 error_reporting(E_ALL);

 $title = 'Data Penjoki';
 include_once 'login_session.php';
 include_once 'koneksi.php';

 if (isset($_POST['submit']))
 {
 $id = $_POST['id_joki'];
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

 $sql = 'UPDATE data_penjoki SET ';
 $sql .= "nama_penjoki = '{$nama_penjoki}', squad = '{$squad}', ";
 $sql .= "tarif_joki = '{$tarif_joki} ";
 $sql .= ", gambar = '{$gambar}' ";
 $sql .= "WHERE id_joki = '{$id}'";
 $result = mysqli_query($conn, $sql);

 header('location: data_penjoki.php');
 }

 $id = $_GET['id'];
 $sql = "SELECT * FROM data_penjoki WHERE id_joki = '{$id}'";
 $result = mysqli_query($conn, $sql);
 if (!$result) die('Error: Data tidak tersedia');
 $data = mysqli_fetch_array($result);

 function is_select($var, $val) {
 if ($var == $val) return 'selected="selected"';
 return false;
 }

 include_once 'header.php';
 ?>

 <h2>Ubah Penjoki</h2>
 <form method="post" action="edit_penjoki.php" enctype="multipart/form-data">
 <div class="input">
 <label>Nama Penjoki</label>
 <input type="text" name="nama_penjoki" value="<?php echo $data['nama_penjoki'];?>" />
 </div>
 <div class="input">
 <label>Squad</label>
  <select name="squad">
 <option value="RRQ" <?php echo is_select('RRQ', $data['squad']);?>>RRQ</option>
 <option value="Evos" <?php echo is_select('Evos', $data['squad']);?>>Evos</option>
 <option value="Onic" <?php echo is_select('Onic', $data['squad']);?>>Onic</option>
 <option value="Public" <?php echo is_select('Public', $data['squad']);?>>Public</option>
 </select>
 </div>
 <div class="input">
 <label>Tarif joki</label>
 <input type="text" name="tarif_joki" value="<?php echo $data['tarif_joki'];?>" />
 </div>
 <label>File Gambar</label>
 <input type="file" name="file_gambar" />
 </div>
 <div class="submit">
 <input type="hidden" name="id" value="<?php echo $data['id_joki'];?>" />
 <input type="submit" name="submit" value="Simpan"/>
 </div>
 </form>
 <?php
 include_once 'footer.php';
 ?>

