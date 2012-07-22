<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Silahkan Login Terlebih Dahulu<br>";
   header('location:login');
}
else {
include "koneksi.php";
include "library.php";
include "timeout.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$update=mysql_real_escape_string($_POST['update']);
if(strlen($update)>0)
{
$time=time();
mysql_query("INSERT INTO status (username,isi_s,tgl_s,jam_s,ad) VALUES('$_SESSION[namauser]','$update','$tgl_sekarang','$jam_sekarang','$tgl_sekarang $jam_sekarang')");
echo "<h1>Thank You !</h1>";
}
}
}
?>