<?php
require 'koneksi.php';

$prodi = $_post['namaprodi'];

//echo'nama prodinya adalah: $prodi
//$query = "INSERT INTO prodi (nama_prodi) VALUES ('$prodi')";

$query = "INSERT INTO prodi (nama_prodi) VALUES ('$prodi')";

mysqli_query($coon , $squery);
?>