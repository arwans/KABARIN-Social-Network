<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link type='text/css' rel='stylesheet' media='all' href='css/kabarin_standar.css' /><div class='kdserror'>
 <center>Silahkan <a href='login'>Login Terlebih </a>Dahulu</div>
<meta http-equiv='refresh' content='0; url=login'>";
}else{
	?>
<script>
$(document).ready(function(){

$('[rel=tooltip]').bind('mouseover', function(){
	  
		
	
 if ($(this).hasClass('ajax')) {
	var ajax = $(this).attr('ajax');	
			
  $.get(ajax,
  function(theMessage){
$('<div class="tooltip">'  + theMessage + '</div>').appendTo('body').fadeIn('slow');});

 
 }else{
			
	    var theMessage = $(this).attr('content');
	    $('<div class="tooltip">' + theMessage + '</div>').appendTo('body').fadeIn('slow');
		}
		
		$(this).bind('mousemove', function(e){
			$('div.tooltip').css({
				'top': e.pageY - ($('div.tooltip').height() / 2) - 5,
				'left': e.pageX + 15
			});
		});
	}).bind('mouseout', function(){
		$('div.tooltip').fadeOut('slow', function(){
			$(this).remove();
		});
	});
						   });

</script>

<style>

.tooltip{
	position:absolute;
	width:250px;
	background-image:url(tip-bg.png);
	background-position:left center;
	color:#FFF;
	padding:5px 5px 5px 18px;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;
	opacity:0.9;
}
	

.tooltip-image{
	float:left;
	margin-right:5px;
	margin-bottom:5px;
	margin-top:3px;}	
	
	
	.tooltip span{font-weight:700;
color:#ffea00;}




</style>
<script> 
        // DOM Load
        $(document).ready(function() { 
            // id form yang digunakan
            $('#tanggap').ajaxForm(function() { 
            	   // Form akan mengirim data secara tersembunyi lalu form akan di reset  dan memunculkan alert, dilanjutkan mereload #responsecontainer sebagai kontainer dinding.
        document.getElementById('tanggap').reset();
              apprise('Tanggapan Berhasil Di Kirim :D', {'animate':true});
                $("#responsecontainer").load("lembar_mention_dinding.php");
                var refreshId = setInterval(function() {
                	$("#responsecontainer").load('lembar_mention_dinding.php?randval='+ Math.random());
  			 });
   $.ajaxSetup ({ cache: false });
            }); 
      
        }); 
    </script>  <!-- alert style-->
<!-- alert style-->
<script language="javascript">
function validasi1(form){
  if (form.isi.value == ""){
  apprise('Anda Belum Menuliskan Apapun Di tanggapan !', {'animate':true});
    form.isi.focus();
    return (false);
  }
  return (true);
}
</script>
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(".kds").hide();
$(".kds").slice(0, 10).show();

$(".more").click(function(){
    var showing = $(".kds:visible").length;
    $(".kds").slice(showing - 1, showing + 10).show();
});

});//]]>  

</script>
<?php           
    session_start();
include "fungsi/library.php";
include "fungsi/koneksi.php";    
include "fungsi/fungsi_indotgl.php"; 
include "fungsi/fungsi_mention.php"; 
include "fungsi/fungsi_time_since.php"; 
 $kata = trim(@$_SESSION[namauser]);
  // mencegah XSS
  $kata = htmlentities(htmlspecialchars($kata), ENT_QUOTES);

  // pisahkan kata per kalimat lalu hitung jumlah kata
  $pisah_kata = explode(" ",$kata);
  $jml_katakan = (integer)count($pisah_kata);
  $jml_kata = $jml_katakan-1;

  $cari = "SELECT * FROM status,users WHERE " ;
    for ($i=0; $i<=$jml_kata; $i++){
      $cari .= "isi_s LIKE '%$pisah_kata[$i]%'";
      if ($i < $jml_kata ){
      }
    }
  $cari .= "AND status.username=users.username AND publis_s='Y' ORDER BY ad DESC LIMIT 7";
  $hasil  = mysql_query($cari);
  $ketemu = mysql_num_rows($hasil);

  if ($ketemu > 0){
      $email_ps = md5( strtolower( trim( "$t[email]" ) ) );
   $avatardef = "mm";
    echo "<div class='kds'><div class='status_kom'>
		<img class='avatar_komen' src='http://www.gravatar.com/avatar/$email_ps?d=$avatardef'><b>Semakin banyak di sebut semakin di kenal.</b><br/>
		<sup>Ketahui seberapa banyak kiriman kabar yang menyebut anda.</sup><hr/>
Anda Baru <b>$ketemu x</b> di sebut (tinggkatkan terus)
<div class='hr'></div>
</div>
</div></div>"; 
    while($t=mysql_fetch_array($hasil)){
    	   $tgl_status = tgl_indo($t[tgl_s]);
   $isi_s = mention($t[isi_s]);
   $timeago = time_ago("$t[tgl_s] $t[jam_s]");
      $email_ps = md5( strtolower( trim( "$t[email]" ) ) );
   $avatardef = "mm";
      
      
          $nyarijml=mysql_query("SELECT * FROM tanggapan,status,users  
                            WHERE tanggapan.id_status=status.id_status 
                            AND tanggapan.username_t=users.username
                            AND tanggapan.id_status=$t[id_status]");
                            $jmltgpn = mysql_num_rows($nyarijml);
      
		echo "<div class='kds'>
<div class='status_aut'>
<img class='avatar_status' src='http://www.gravatar.com/avatar/$email_ps?d=$avatardef&s=50'><b><a title='@$t[username]' href='#'>$t[nama_lengkap]</a></b><br />
<sup > <a title='$tgl_status pukul $t[jam_s]'>$timeago</a> | <sup><a href='#'>$jmltgpn Tanggapan</a></sup></sup><br />
$isi_s</div>
	<div class='hr'></div>";
	
          $sub=mysql_query("SELECT * FROM tanggapan,status,users  
                            WHERE tanggapan.id_status=status.id_status 
                            AND tanggapan.username_t=users.username
                            AND tanggapan.id_status=$t[id_status]
                             ORDER BY tgl,jam");
	        while($w=mysql_fetch_array($sub)){
   $tgl_tgpn = tgl_indo($w[tgl]);
   $isi = mention($w[isi]);
   $times = ('$w[tgl] $w[jam]');
   $timeagot = time_ago("$w[tgl] $w[jam]");
      $email_st = md5( strtolower( trim( "$w[email]" ) ) );
	        	
 	
echo "<div class='status_kom'>
<img class='avatar_komen' src='http://www.gravatar.com/avatar/$email_st?d=$avatardef&s=30'>
<a title='@$w[username]' href='#'><b>$w[nama_lengkap]</b></a><br />
<sup> <a title='$tgl_tgpn pukul $w[jam]'>$timeagot</a> </sup><br />
$isi
<div class='hr'></div>
</div>";
}
	echo"
<div class='form_komen'>
<form action='aksi_komenstatus.php?at=komen_mention' id='tanggap' method='post' onSubmit='return validasi1(this)'>
<textarea class='komenisi' name='isi' placeholder='Tanggapan Anda' maxlength='175' showremainkom='limitkoma$t[id_status]'></textarea>

<div class='komengbrkode'><div style='text-align:center;' id='limitkoma$t[id_status]'>175<br/><sup>karakter</sup></div></div>

<input type='hidden' name='id' value='$t[id_status]'>
<input type='submit' value='Tanggapi' class='komensubmit'>
</form>
</div>
<div class='read'><sub>Share To :</sub> <a href='#'>Facebook</a> | <a href='#'>Twitter</a></div>
</div>
	";
    }                                                          
  }
  else{    echo "<div class='kds'><div class='status_kom'>
		<img class='avatar_komen' src='http://www.gravatar.com/avatar/$email_st?d=$avatardef'><b>Semakin banyak di sebut semakin di kenal.</b><br/>
		<sup>Ketahui seberapa banyak kiriman kabar yang menyebut anda.</sup><hr/>
Anda Baru <b>$ketemu x</b> di sebut (tinggkatkan terus)
<div class='hr'></div>
</div>
</div></div>"; 
  }  
?><div class="more" style="
float:left;
margin-left:35px;
padding:7px;
width:400px;
background:#FFFFFF;
/*border-radius*/
-webkit-border-radius:10px;
   -moz-border-radius:10px;
        border-radius:10px;
margin-top:30px;
color:#555555;
font-size:14px;
-webkit-box-shadow:0 0 2px #552200;
   -moz-box-shadow:0 0 2px #552200;
        box-shadow:0 0 2px #552200;text-align:center;">showmore</div>
<?php }?>