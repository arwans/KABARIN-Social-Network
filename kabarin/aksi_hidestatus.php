<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Silahkan Login Terlebih Dahulu<br>";
   header('location:login');
}
else {
	?>
	
<?php
session_start();
include "fungsi/koneksi.php";
include "fungsi/library.php";

$sby=trim($_POST['sby']);
$publis=trim($_POST['publis']);


  mysql_query("UPDATE status SET publis_s    = '$publis'
                           WHERE id_status   = '$sby'");

    echo "<meta http-equiv='refresh' content='0; url=profil'>";

}
?>
