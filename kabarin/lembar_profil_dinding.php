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

<script type="text/javascript" >
        // DOM Load
        $(document).ready(function() { 
            // id form yang digunakan
            $('#tanggap').ajaxForm(function() { 
            	   // Form akan mengirim data secara tersembunyi lalu form akan di reset  dan memunculkan alert, dilanjutkan mereload #responsecontainer sebagai kontainer dinding.
        document.getElementById('tanggap').reset();
              apprise('Tanggapan Berhasil Di Kirim :D', {'animate':true});
                $("#responsecontainer").load("lembar_profil_dinding.php");
                var refreshId = setInterval(function() {
                	$("#responsecontainer").load('lembar_profil_dinding.php?randval='+ Math.random());
  			 });
   $.ajaxSetup ({ cache: false });
            }); 
      
        }); 
    </script> 
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

<!-- alert style-->
<?php           
    
include "fungsi/koneksi.php";    
include "fungsi/fungsi_indotgl.php"; 
include "fungsi/fungsi_mention.php"; 
include "fungsi/fungsi_time_since.php"; 
   $main=mysql_query("SELECT * FROM status,users
 							   WHERE status.username=users.username
 							   AND status.username='$_SESSION[namauser]'
 							   ORDER BY ad DESC");
 							   
 while($s=mysql_fetch_array($main)){
   $tgl_status = tgl_indo($s[tgl_s]);
   $isi_s = mention($s[isi_s]);
   $timeago = time_ago("$s[tgl_s] $s[jam_s]");
      $email_ps = md5( strtolower( trim( "$s[email]" ) ) );
   $avatardef = "mm";
      
          $nyarijml=mysql_query("SELECT * FROM tanggapan,status,users  
                            WHERE tanggapan.id_status=status.id_status 
                            AND tanggapan.username_t=users.username
                            AND tanggapan.id_status=$s[id_status]");
                            $jmltgpn = mysql_num_rows($nyarijml);
     echo "

<div class='kds'>
	<div class='status_aut'><div style='float:right;color:#999;'>";
	   if ($s[publis_s]=='Y'){
	    	echo "
<form action='aksi_hidestatus.php' id='sembunyi$s[id_status]' method='post'>
<input type='hidden' name='sby' value='$s[id_status]'>
<input type='hidden' name='publis' value='N'>
<input type='submit' value='$s[publis_s]' class='xbutton'></div>
	</form>    <script type=\"text/javascript\" >
        // DOM Load
        $(document).ready(function() { 
            // id form yang digunakan
            $('#sembunyi$s[id_status]').ajaxForm(function() { 
            	   // Form akan mengirim data secara tersembunyi lalu form akan di reset  dan memunculkan alert, dilanjutkan mereload #responsecontainer sebagai kontainer dinding.
              apprise('Sekarang kabar yang anda pilih sudah di sembunyikan :D', {'animate':true});
                $(\"#responsecontainer\").load(\"lembar_profil_dinding.php\");
                var refreshId = setInterval(function() {
                	$(\"#responsecontainer\").load('lembar_profil_dinding.php?randval='+ Math.random());
  			 });
   $.ajaxSetup ({ cache: false });
            }); 
      
        }); 
    </script>";
}
	else {echo "
<form action='aksi_hidestatus.php' id='sembunyi$s[id_status]' method='post'>
<input type='hidden' name='sby' value='$s[id_status]'>
<input type='hidden' name='publis' value='Y'>
<input type='submit' value='$s[publis_s]' class='xbutton'></div>
	</form>
	 <script type=\"text/javascript\" >
        // DOM Load
        $(document).ready(function() { 
            // id form yang digunakan
            $('#sembunyi$s[id_status]').ajaxForm(function() { 
            	   // Form akan mengirim data secara tersembunyi lalu form akan di reset  dan memunculkan alert, dilanjutkan mereload #responsecontainer sebagai kontainer dinding.
              apprise('Sekarang kabar yang anda pilih sudah tidak di sembunyikan :D', {'animate':true});
                $(\"#responsecontainer\").load(\"lembar_profil_dinding.php\");
                var refreshId = setInterval(function() {
                	$(\"#responsecontainer\").load('lembar_profil_dinding.php?randval='+ Math.random());
  			 });
   $.ajaxSetup ({ cache: false });
            }); 
      
        }); 
    </script>";}
	echo "

<img class='avatar_status' src='http://www.gravatar.com/avatar/$email_ps?d=$avatardef&s=50'><b><a title='@$s[username]' href='#'>$s[nama_lengkap]</a></b><br />
<sup > <a title='$tgl_status pukul $s[jam_s]'>$timeago</a> | <sup><a href='#'>$jmltgpn Tanggapan</a></sup></sup><br />
$isi_s</div>
	<div class='hr'></div>";
	
          $sub=mysql_query("SELECT * FROM tanggapan,status,users  
                            WHERE tanggapan.id_status=status.id_status 
                            AND tanggapan.username_t=users.username
                            AND tanggapan.id_status=$s[id_status]
                             ORDER BY tgl,jam");
	        while($w=mysql_fetch_array($sub)){
   $tgl_tgpn = tgl_indo($w[tgl]);
   $isi = mention($w[isi]);
   $times = ('$w[tgl] $w[jam]');
   $timeagot = time_ago("$w[tgl] $w[jam]");
      $email_st = md5( strtolower( trim( "$w[email]" ) ) );
	        	
 	
echo "<div class='status_kom'>
<img class='avatar_komen' src='http://www.gravatar.com/avatar/$email_st?d=$avatardef&s=30'>
<a title='@$s[username]' href='#'><b>$w[nama_lengkap]</b></a><br />
<sup> <a title='$tgl_tgpn pukul $w[jam]'>$timeagot</a> </sup><br />
$isi
<div class='hr'></div>
</div>";
}
echo"
<div class='form_komen'>
<form action='aksi_komenstatus.php?at=profil' id='tanggap' method='post'  onSubmit='return validasi1(this)'>
<textarea class='komenisi' name='isi' id='isi' placeholder='Tanggapan Anda' maxlength='175' showremain='limita$s[id_status]'></textarea>

<div class='komengbrkode'><div style='text-align:center;' id='limita$s[id_status]'>175<br/><sup>karakter</sup></div></div>

<input type='hidden' name='id' value='$s[id_status]'>
<input type='submit' value='Tanggapi' class='komensubmit'>
</form>
</div>
<div class='read'><sup>Bagikan :</sup> <a href='#'>Facebook</a> | <a href='#'>Twitter</a></div>
</div>
	";

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
<?php }
?>