

<?php          
include "fungsi/koneksi.php"; 
include "fungsi/fungsi_time_since.php"; 


   $main=mysql_query("SELECT * FROM notif,users
 							   WHERE p_status='$_SESSION[namauser]'
 							   AND notif.p_tanggapan=users.username
 							   ORDER BY id_notif DESC");
 							   
 while($s=mysql_fetch_array($main)){
      $email_ps = md5( strtolower( trim( "$s[email]" ) ) );
   	  $avatardef = "mm";
      $timeago = time_ago("$s[tgl_notif] $s[jam_notif]");
 	echo"<li style='list-style:none; clear:both; padding:5px 0 5px 0; border-bottom:1px #ccc dashed;'>
 	<img src='http://www.gravatar.com/avatar/$email_ps?d=$avatardef&size=30' style='border-radius:5px; width:30px; height:30px; float:left; margin-right:5px;'><a href='profil.php?u=$s[username]'>$s[nama_lengkap]</a> memberikan tanggapan di <a href='media.php?idstatus=$s[id_status]'>status</a> Anda.
 	<br/><span style='font-size:9px'>$timeago.</span></li> ";
 	}
       
?>