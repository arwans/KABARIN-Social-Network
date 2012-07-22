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

if ($_GET['at']=='komen_beranda'){
$komenstatus=trim($_POST['isi']);
$id=trim($_POST['id']);

if (empty($komenstatus)){
  echo "Anda belum menulis apapun<br />
  	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
}
else{
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$komenstatus = antiinjection($_POST['isi']);

	//if(!empty($_POST['kode'])){
	//	if($_POST['kode']==$_SESSION['captcha_session']){

// Mengatasi input komentar tanpa spasi
$split_text = explode(" ",$komenstatus);
$split_count = count($split_text);
$max = 57;

for($i = 0; $i <= $split_count; $i++){
if(strlen($split_text[$i]) >= $max){
for($j = 0; $j <= strlen($split_text[$i]); $j++){
$char[$j] = substr($split_text[$i],$j,1);
if(($j % $max == 0) && ($j != 0)){
  $v_text .= $char[$j] . ' ';
}else{
  $v_text .= $char[$j];
}
}
}else{
  $v_text .= " " . $split_text[$i] . " ";
}
}

    $sql = mysql_query("INSERT INTO tanggapan (username_t,id_status,isi,tgl,jam,ad_t) VALUES('$_SESSION[namauser]','$id','$v_text','$tgl_sekarang','$jam_sekarang','$tgl_sekarang $jam_sekarang')");
     
$cariusernamepstatus=mysql_query("SELECT * FROM status WHERE id_status='$id'");
  $cr=mysql_fetch_array($cariusernamepstatus);
  
    $sqla = mysql_query("INSERT INTO notif (p_status,p_tanggapan,id_status,tgl_notif,jam_notif) VALUES('$cr[username]','$_SESSION[namauser]','$id','$tgl_sekarang','$jam_sekarang')");

    echo "<meta http-equiv='refresh' content='0; url=beranda'>";
		//}else{
	//		echo "Kode yang Anda masukkan tidak cocok<br />
	//		      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
	//	}
//	}else{
//		echo "Anda belum memasukkan kode<br />
  //	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
	//}
}
}


elseif ($_GET['at']=='komen_mention'){
	
include "fungsi/koneksi.php";
include "fungsi/library.php";
$komenstatus=trim($_POST['isi']);
$id=trim($_POST['id']);

if (empty($komenstatus)){
  echo "Anda belum menulis apapun<br />
  	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
}
else{
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$komenstatus = antiinjection($_POST['isi']);

	//if(!empty($_POST['kode'])){
	//	if($_POST['kode']==$_SESSION['captcha_session']){

// Mengatasi input komentar tanpa spasi
$split_text = explode(" ",$komenstatus);
$split_count = count($split_text);
$max = 57;

for($i = 0; $i <= $split_count; $i++){
if(strlen($split_text[$i]) >= $max){
for($j = 0; $j <= strlen($split_text[$i]); $j++){
$char[$j] = substr($split_text[$i],$j,1);
if(($j % $max == 0) && ($j != 0)){
  $v_text .= $char[$j] . ' ';
}else{
  $v_text .= $char[$j];
}
}
}else{
  $v_text .= " " . $split_text[$i] . " ";
}
}

    $sql = mysql_query("INSERT INTO tanggapan (username_t,id_status,isi,tgl,jam,ad_t) VALUES('$_SESSION[namauser]','$id','$v_text','$tgl_sekarang','$jam_sekarang','$tgl_sekarang $jam_sekarang')");

$cariusernamepstatus=mysql_query("SELECT * FROM status WHERE id_status='$id'");
  $cr=mysql_fetch_array($cariusernamepstatus);
  
    $sqla = mysql_query("INSERT INTO notif (p_status,p_tanggapan,id_status,tgl_notif,jam_notif) VALUES('$cr[username]','$_SESSION[namauser]','$id','$tgl_sekarang','$jam_sekarang')");

    echo "<meta http-equiv='refresh' content='0; url=sebutan'>";
		//}else{
	//		echo "Kode yang Anda masukkan tidak cocok<br />
	//		      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
	//	}
//	}else{
//		echo "Anda belum memasukkan kode<br />
  //	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
	//}
}
}


elseif ($_GET['at']=='profil'){
	
include "fungsi/koneksi.php";
include "fungsi/library.php";
$komenstatus=trim($_POST['isi']);
$id=trim($_POST['id']);

if (empty($komenstatus)){
  echo "Anda belum menulis apapun<br />
  	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
}
else{
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$komenstatus = antiinjection($_POST['isi']);

	//if(!empty($_POST['kode'])){
	//	if($_POST['kode']==$_SESSION['captcha_session']){

// Mengatasi input komentar tanpa spasi
$split_text = explode(" ",$komenstatus);
$split_count = count($split_text);
$max = 57;

for($i = 0; $i <= $split_count; $i++){
if(strlen($split_text[$i]) >= $max){
for($j = 0; $j <= strlen($split_text[$i]); $j++){
$char[$j] = substr($split_text[$i],$j,1);
if(($j % $max == 0) && ($j != 0)){
  $v_text .= $char[$j] . ' ';
}else{
  $v_text .= $char[$j];
}
}
}else{
  $v_text .= " " . $split_text[$i] . " ";
}
}

    $sql = mysql_query("INSERT INTO tanggapan (username_t,id_status,isi,tgl,jam,ad_t) VALUES('$_SESSION[namauser]','$id','$v_text','$tgl_sekarang','$jam_sekarang','$tgl_sekarang $jam_sekarang')");

$cariusernamepstatus=mysql_query("SELECT * FROM status WHERE id_status='$id'");
  $cr=mysql_fetch_array($cariusernamepstatus);
  
    $sqla = mysql_query("INSERT INTO notif (p_status,p_tanggapan,id_status,tgl_notif,jam_notif) VALUES('$cr[username]','$_SESSION[namauser]','$id','$tgl_sekarang','$jam_sekarang')");

    echo "<meta http-equiv='refresh' content='0; url=profil'>";
		//}else{
	//		echo "Kode yang Anda masukkan tidak cocok<br />
	//		      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
	//	}
//	}else{
//		echo "Anda belum memasukkan kode<br />
  //	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
	//}
}
}
?>
<?php }
?>
