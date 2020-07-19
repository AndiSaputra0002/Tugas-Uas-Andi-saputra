 <?php
 include_once 'login_session.php';
 include_once 'koneksi.php';

 $id = $_GET['id'];
 $sql = "DELETE FROM data_penjoki WHERE id_joki = '{$id}'";
 $result = mysqli_query($conn, $sql);

 header('location: data_penjoki.php');