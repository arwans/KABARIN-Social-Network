<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@ KABARIN | Beranda</title>
<link type="text/css" rel="stylesheet" media="all" href="css/kabarin_standar.css" />
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript">
</script>
<script language="javascript" type="text/javascript">
//<![CDATA[
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
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
                function goToByScroll(id){
                        $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
                }
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
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
        
//]]>
</script>
<script type="text/javascript" src="js/behaviour.js">
</script>
<script type="text/javascript" src="js/textarea_maxlen.js">
</script>
<script type="text/javascript" src="js/apprise-1.5.min.js">
</script>
<link rel="stylesheet" href="css/apprise.min.css" type="text/css" />
<meta http-equiv='refresh' content='0; url=error_noscript.php' />
<style type="text/css">
/*<![CDATA[*/
 div.c10 {clear:both; margin-bottom:40px}
 div.c9 {margin-left:25px;}
 img.c8 {background:#fff url(images1/uparrow.png) center no-repeat; width:90px; height:100px;}
 div.c7 {clear:both; height:50px;}
 div.c6 {clear:both; height:20px;}
 div.c5 {height:20px; font-size:10px; text-align:center; color:#999;margin-top:5px}
 div.c4 {clear:both; height:200px}
 div.c3 {height: 400px; margin: auto; position: fixed; width: 300px}
 div.c2 {clear:both}
 a.c1 {color:#99CC00;}
/*]]>*/
</style>
</head>
<body id="top">
<div class="bar-title1" id="bar-box2"><span class="bar-text"><a class='c1' href='beranda'>...KABARIN...</a></span>
<div class="c2"></div>
<div id="ribbontengah">
<div class="inset"></div>
<div class="container">
<div class="base"></div>
<div class="left_corner"></div>
<div class="right_corner"></div>
</div>
</div>
</div>
<div class="c3">
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
<div class="c4"></div>
<div class="content_utama">
<div class="sl">
<form action='aut_cek_login.php' method='post' onsubmit='return validasi(this)'><input type='text' class='loginform' id='username' name='username' maxlength='15' /> <input type='password' class='loginform' id='password' name='password' /><input type='submit' name='login' value='MASUK' id='submit' class='loginformbtn' />
<div class='clear'></div>
<div class='c5'>Lupa Kata Sandi</div>
</form>
<div class="clear"></div>
</div>
<div class="c6"></div>
<div class="bag_bawah">
<div class="leftarrow"></div>
<div class="area_bawah">
<div class="left_bawah">
<ul>
<li class="hrbot"><a href="#">Berita Umum</a></li>
<li class="hrbot"><a href="#">Berita Sekolah</a></li>
<li class="hrbot"><a href="#">Berita Agenda</a></li>
<li class="hrbot"><a href="#">Berita Kesiswaan</a></li>
</ul>
</div>
<div class="right_bawah">
<ul>
<li class="hrbot"><a href="#">Artikel Umum</a></li>
<li class="hrbot"><a href="#">Artikel Tutorial</a></li>
<li class="hrbot"><a href="#">Artikel Sekolah</a></li>
<li class="hrbot"><a href="#">Artikel Perkembangan</a></li>
</ul>
</div>
</div>
</div>
<div class="c7"></div>
<div class="c9"><a title="ke atas" href="javascript:void(0)" onclick="goToByScroll('top')"><img class='imgs c8' alt="** PLEASE DESCRIBE THIS IMAGE **" /></a></div>
<div class="c10"></div>
</div>
</body>
</html>