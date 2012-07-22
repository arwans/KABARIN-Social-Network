<?php
session_start();
error_reporting(0);
include "aut_timeout.php";

if($_SESSION[login]==1){
	if(!cek_login()){
		$_SESSION[login] = 0;
	}
}
if($_SESSION[login]==0){
  header('location:login');
}
else{
if (empty($_SESSION['username']) AND empty($_SESSION['passuser']) AND $_SESSION['login']==0){
  echo "<link type='text/css' rel='stylesheet' media='all' href='css/kabarin_standar.css' /><div class='kdserror'>
 <center>Silahkan <a href='login'>Login Terlebih </a>Dahulu</div>";
  header('location:login');
}
else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@ KABARIN | Beranda</title>

<link type="text/css" rel="stylesheet" media="all" href="css/kabarin_standar.css" />
<!-- alert style-->
<script type="text/javascript" src="js/apprise-1.5.min.js"></script>
<link rel="stylesheet" href="css/apprise.min.css" type="text/css" />
<!-- alert style-->
    <script type="text/javascript" src="js/ajaxjquery.1.7.js"></script> 
<script language="javascript">
function validasi(form){
  if (form.isi_s.value == ""){
  apprise('Anda Belum Menuliskan Apapun !', {'animate':true});
    form.isi_s.focus();
    return (false);
  }
     
  return (true);
}
</script>
<script>
		function goToByScroll(id){
     			$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
		}
</script>
<script>
 $(document).ready(function() {
 	 $("#responsecontainer").load("lembar_dinding.php");

});
</script>      

<script type="text/javascript" >
$(document).ready(function()
{
$(".account").click(function()
{
var X=$(this).attr('id');

if(X==1)
{
$(".submenu").hide();
$(this).attr('id', '0');	
}
else
{

$(".submenu").show();
$(this).attr('id', '1');
}
	
});

//Mouseup textarea false
$(".submenu").mouseup(function()
{
return false
});
$(".account").mouseup(function()
{
return false
});


//Textarea without editing.
$(document).mouseup(function()
{
$(".submenu").hide();
$(".account").attr('id', '');
});
	
});
	
	</script>
	
	

<script type="text/javascript" src="js/behaviour.js"></script>
<script type="text/javascript" src="js/textarea_maxlen.js"></script>


    <script src="js/jquery.form.js"></script> 
<script> 
        // DOM Load
        $(document).ready(function() { 
            // id form yang digunakan
            $('#myForm').ajaxForm(function() { 
            	   // Form akan mengirim data secara tersembunyi lalu form akan di reset  dan memunculkan alert, dilanjutkan mereload #responsecontainer sebagai kontainer dinding.
        document.getElementById('myForm').reset();
            apprise('Kabar terbaru anda berhasil di publis :D', {'animate':true}); 
                $("#responsecontainer").load("lembar_dinding.php");
                var refreshId = setInterval(function() {
                	$("#responsecontainer").load('lembar_dinding.php?randval='+ Math.random());
  			 });
   $.ajaxSetup ({ cache: false });
            }); 
      
        }); 
    </script> 
    
</head>

<body id="top">
<div id="bar-box">
<div class="bar-title">
<span class="bar-text"><a style='color:#99CC00;' href='beranda'>KABARIN</a></span> 
    <div class="bar-link"> 
     <noscript> <meta http-equiv='refresh' content='0; url=error_noscript.php'> </noscript> 
	</div>
        <div class="dropdown">
	<a class="account" >
	<span>
<?php
include "fungsi/koneksi.php"; 
$ban=mysql_query("SELECT * FROM users WHERE username='$_SESSION[namauser]'");
  $r=mysql_fetch_array($ban);
   $email = md5( strtolower( trim( "$r[email]" ) ) );
   $avatardef = "mm";
  echo "<img src='http://www.gravatar.com/avatar/$email?d=$avatardef&s=35' style='border-radius: 6px; width:35px; height:35px; box-shadow:-1px -1px 1px rgba(0, 0, 6, 0.80);margin:-7px -5px 5px 5px;float:left'> AKUN<br/>";
?></span>
	</a>
	<div class="submenu" style="display: none; ">

	  <ul class="root">
<li >
	       <a href="profil" >Profil </a>
	    </li>

	    
	    <li >
	      <a href="sebutan" >Di Sebut <sup>16 kali</sup> </a>
	    </li>
	   <li >

	      <a href="#settings">Settings</a>
	    </li>
	   

	    <li>
	      <a href="#feedback">Send Feedback</a>
	    </li>



	    <li>
	      <a href="aut_logout.php">Sign Out</a>
	    </li>

	  </ul>
	</div>
	</div>
	
<div style="clear:both"></div>

<div id="ribbon">
	
	<div class="inset"></div>
	
	<div class="container">
		<div class="base"></div>
		<div class="left_corner"></div>
		<div class="right_corner"></div>
	</div>

</div>
</div>
    

</div>
<div style="clear:both; height:60px"></div>

<div class="content_utama">
<?php

include "fungsi/koneksi.php"; 
include "fungsi/fungsi_indotgl.php";
$ban=mysql_query("SELECT * FROM users WHERE username='$_SESSION[namauser]'");
  $ketemu = mysql_num_rows($ban);
  $r=mysql_fetch_array($ban);
   $tgl_lahir = tgl_indo($r[tgl_lahir]);
   $email = md5( strtolower( trim( "$r[email]" ) ) );
   $avatardef = "mm";
  echo "
<div class='detail_prof'>
<a href='#'>
	<b>$r[nama_lengkap] - <span style='color:#999999; font-size:12px;'>@$r[username]</span></b>
<div class='hr' style='margin:5px 0 5px 0;'></div>
<sup>Lahir : Bogor, $tgl_lahir <br />
Kejuruan : $r[kejuruan]
<div class='hr' style='margin:5px 0 5px 0;'></div>
Rumah di tinggal di : <br/>$r[alamat]<br/></sup></a>
<div class='clear'></div>
</div>
<img class='photoprofile' src='http://www.gravatar.com/avatar/$email?d=$avatardef&s=130'>
<div style='clear:both; height:20px;'></div>";
?>
<div class="st">
    <form action="aksi_updatestatus.php?at=update_beranda" id="myForm" method="post" onSubmit="return validasi(this)">
<textarea class="komenisiupdate" placeholder="Isi Kabar" name="isi_s" id="isi_s" maxlength="175" showremain="limitOne"></textarea>

<div class="komengbrkode"><div style="text-align:center;" id="limitOne">175<br/><sup>karakter</sup></div></div>
<!-- menggunakan captcha
<img src="captcha.php" class="komengbrkode"/>
<input class="komenkode" placeholder="Kode" name="kode"> 
menggunakan captcha -->
<input type="submit" value="Update" class="komensubmitupdate">
	</form>
    
<div class="clear"></div>
</div>

<div class="content_tiang">

<div style="clear:both; height:20px;"></div>

<!-- Dinding Auto Load-->
<div id='responsecontainer'></div>
<!-- #Dinding Auto Load-->

<!--  Backup code
	
<div class="kds">
<div class="status_aut">
<img class="avatar_status" src="foto_user/a1.jpg"><b><a href="#">Ade Arwans</a></b><br />
<sup>21-maret-1995 - 20:10:00 | <sup><a href="#">14 tanggapan</a></sup></sup><br />
Keringatku lebih banyak keluar untuk internet sehat dari pada senam sehat.</div>
<div class="hr"></div>

<div class="status_kom">
<img class="avatar_komen" src="foto_user/kecil_10Cetakanade001.jpg">
<a href="#"><b>Ade Arwans</b></a><br />
<sup>Bogor 21-maret-1995</sup><br />
Keringatku lebih banyak keluar untuk internet sehat dari pada senam sehat.
<div class="hr"></div>
</div>

<div class="form_komen">
<form action="" method="post">
<textarea class="komenisi" placeholder="Tanggapan Anda"></textarea>
<img src="captcha.png" class="komengbrkode"/>
<input class="komenkode" placeholder="Kode">
<input type="submit" value="Update" class="komensubmit">
</form>
</div>

<div class="read"><sub>Share To :</sub> <a href="#">Facebook</a> | <a href="#">Twitter</a></div>
</div>

Backup code -->

<div style="clear:both;"></div>


<div class="bag_bawah">
		<div class="leftarrow"></div>
	<div class="area_bawah">
			<div style="background:400px; width: 335px; height: 135px; overflow: auto; padding: 5px; margin-top:2px; font-size:12px;">
				<?php include "t_notif.php"; ?>
   </div> 
        
	</div>
</div>

<div style="clear:both; margin-bottom:40px"></div>
<div style="margin-left:25px;">
<a title="ke atas" href="javascript:void(0)" onClick="goToByScroll('top')">
	<img style='background:#fff url(images/uparrow.png) center no-repeat;  width:90px; height:100px; 'class='imgs'></a>
</div>
<div style="clear:both; margin-bottom:40px"></div>
</div>
</div>

</body>
</html>

<?php
}
}
?>