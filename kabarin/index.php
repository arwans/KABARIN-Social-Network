<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@ KABARIN | Beranda</title>

<link type="text/css" rel="stylesheet" media="all" href="css/kabarin_standar.css" />

<script src="http://code.jquery.com/jquery-latest.js"></script><script language="javascript">
function validasi(form){
  if (form.username.value == ""){
  apprise('Anda Belum Memasukan Username', {'animate':true});
    form.username.focus();
    return (false);
  }
     
  if (form.password.value == ""){
  apprise('Anda Belum Memasukan Password', {'animate':true});
    form.password.focus();
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


<script type="text/javascript" src="js/apprise-1.5.min.js"></script>
<link rel="stylesheet" href="css/apprise.min.css" type="text/css" />

</head>

<body id="top">
<div id="bar-box2">
<div class="bar-title1">
<span class="bar-text"><a style='color:#99CC00;' href='beranda'>...KABARIN...</a></span> 

<div style="clear:both"> <noscript> <meta http-equiv='refresh' content='0; url=error_noscript.php'> </noscript> </div>

<div id="ribbontengah">
	
	<div class="inset"></div>
	
	<div class="container">
		<div class="base"></div>
		<div class="left_corner"></div>
		<div class="right_corner"></div>
	</div>

</div>
</div>
    

</div>

<div style="width:300px;  margin:auto;">
<div style="width:120px; height:400px; margin:50px 0 0 -220px; position:fixed;">
	<div class="boxbot1">
		<div class="box">A</div>
		<div class="box">D</div>
		<div class="box">E</div>
		<div class="box">A</div>
		<div class="box">S</div>
	</div>
<div class="boxbot"></div>
<div class="boxbotmask"></div>
<div class="boxbot2"></div>
</div>
</div>

<div style="clear:both; height:200px"></div>

<div class="content_utama">
<div class="sl"><?php
	if ($_GET['ref']=='gagal'){
	echo "<div style='color:#f00; font-size:12px;text-align:center;'>Login Gagal, mungkin username/password salah..</div>"; } ?>
<?php session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "
    <form action='aut_cek_login.php' method='post' onSubmit='return validasi(this)'>
<input type='text' class='loginform' placeholder='Username...'  id='username' name='username' maxlength='15'/>
<input type='password' class='loginform' placeholder='Password...' id='password' name='password' /><input type='submit'  name='login' Value='MASUK' id='submit' class='loginformbtn'  />
<div class='clear'></div>
<div style='height:20px; font-size:10px; text-align:center; color:#999;margin-top:5px'>User/Pass : joko/joko  | admin/admin </div>
	</form>";

}
	
else{    echo "<div style='margin-left:75px'><img src='css/loader.gif'></div><meta http-equiv='refresh' content='0; url=beranda'>";

}
?>
<div class="clear"></div>
</div>

<div style="clear:both; height:20px;"></div>



<div class="bag_bawah">
		<div class="leftarrow"></div>
	<div class="area_bawah">
		<div class="left_bawah">
        <li class="hrbot"><a href="#">Berita Umum</a></li> 
		<li class="hrbot"><a href="#">Berita Sekolah</a></li> 
		<li class="hrbot"><a href="#">Berita Agenda </a></li> 
		<li class="hrbot"><a href="#">Berita Kesiswaan</a></li>
		</div>
    
    	<div class="right_bawah"> 
        <li class="hrbot"><a href="#">Artikel Umum</a></li>
        <li class="hrbot"><a href="#">Artikel Tutorial</a></li>
        <li class="hrbot"><a href="#">Artikel Sekolah</a></li>
        <li class="hrbot"><a href="#">Artikel Perkembangan</a></li>
    	</div>
	</div>
</div>

<div style="clear:both; height:50px;"></div>
<div style="margin-left:25px;">
<a title="ke atas" href="javascript:void(0)" onClick="goToByScroll('top')">
	<img style='background:#fff url(images1/uparrow.png) center no-repeat;  width:90px; height:100px; 'class='imgs'></a>
</div>
<div style="clear:both; margin-bottom:40px"></div>

</div>

</body>
</html>
