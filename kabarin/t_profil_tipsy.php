<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link type='text/css' rel='stylesheet' media='all' href='css/kabarin_standar.css' /><div class='kdserror'>
 <center>Silahkan <a href='login'>Login Terlebih </a>Dahulu</div>
<meta http-equiv='refresh' content='0; url=login'>";


}else{

include "fungsi.php"; 
$ban=mysql_query("SELECT * FROM users WHERE username='$_GET[user]'");
  $r=mysql_fetch_array($ban);
   $tgl_lahir = tgl_indo($r[tgl_lahir]);
   $email = md5( strtolower( trim( "$r[email]" ) ) );
   $avatardef = "http://www.imgjoe.com/x/avatartzt.jpg";  
   $ketemu = mysql_num_rows($ban);

  if ($ketemu > 0){
  echo "
<div style='color:#fff'>
	<img src='http://www.gravatar.com/avatar/$email?size=75' style='width:50; height:50; border:1px #aaa solid; float:left;margin-right:5px; border-radius:5px;'>
	<span style='color:#fff; font-size:10px; '>$r[nama_lengkap]</span> <br/>
	<span style='color:#666; font-size:9px;'>Kejuruan : $r[kejuruan]</span><hr style='color:#333; font-size:9px; border-bottom:1px #666 solid;'/>
		<span style='color:#333; font-size:9px;'>Alamat : $r[alamat]</span>
</div>";
}
  else{
    echo "<div style='color:#fff'>
		<span style='color:#333; font-size:9px;'>Detail tidak ditemukan</span></div>";
  }
  }
?>