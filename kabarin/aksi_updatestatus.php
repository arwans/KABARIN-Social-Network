<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser']) AND $_SESSION['login']==0){
  echo "<link type='text/css' rel='stylesheet' media='all' href='css/kabarin_standar.css' /><div class='kdserror'>
 <center>Silahkan <a href='login'>Login Terlebih </a>Dahulu</div>";
  header('location:login');
}
else {
	?>
		
	<?php
session_start();
include "fungsi/koneksi.php";
include "fungsi/library.php";

if ($_GET['at']=='update_beranda'){
$updatestatus=trim($_POST['isi_s']);

if (empty($updatestatus)){
  echo "Anda belum menulis apapun<br />
  	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
}
else{
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$updatestatus = antiinjection($_POST['isi_s']);

	// if(!empty($_POST['kode'])){
	//	if($_POST['kode']==$_SESSION['captcha_session']){

// Mengatasi input komentar tanpa spasi
$split_text = explode(" ",$updatestatus); //jika memakai captcha ganti dengan $updatestatus
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

    $sql = mysql_query("INSERT INTO status (username,isi_s,tgl_s,jam_s,ad) VALUES('$_SESSION[namauser]','$v_text','$tgl_sekarang','$jam_sekarang','$tgl_sekarang $jam_sekarang')");

    echo "<meta http-equiv='refresh' content='0; url=beranda'>";
	//	}
		//else{
		//	echo "Kode yang Anda masukkan tidak cocok<br />
		//	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
		//}
//	}else{
	//	echo "Anda belum memasukkan kode<br />
  //	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
//	}
}
}
if ($_GET['at']=='update_mention'){
$updatestatus=trim($_POST['isi_s']);

if (empty($updatestatus)){
  echo "Anda belum menulis apapun<br />
  	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
}
else{
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$updatestatus = antiinjection($_POST['isi_s']);

	// if(!empty($_POST['kode'])){
	//	if($_POST['kode']==$_SESSION['captcha_session']){

// Mengatasi input komentar tanpa spasi
$split_text = explode(" ",$updatestatus); //jika memakai captcha ganti dengan $updatestatus
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

    $sql = mysql_query("INSERT INTO status (username,isi_s,tgl_s,jam_s,ad) VALUES('$_SESSION[namauser]','$v_text','$tgl_sekarang','$jam_sekarang','$tgl_sekarang $jam_sekarang')");

    echo "<meta http-equiv='refresh' content='0; url=sebutan'>";
	//	}
		//else{
		//	echo "Kode yang Anda masukkan tidak cocok<br />
		//	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
		//}
//	}else{
	//	echo "Anda belum memasukkan kode<br />
  //	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
//	}
}
}
?>
<?php }?>