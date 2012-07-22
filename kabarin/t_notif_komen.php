

<?php          
include "fungsi/koneksi.php"; 

   $main=mysql_query("SELECT * FROM notif
							   WHERE  p_tanggapan='joko'
							   ORDER BY id_notif");
		$jml = mysql_num_rows($main);
$notif=mysql_fetch_array($main);
   
          $sub=mysql_query("SELECT * FROM notif,users
                            WHERE id_status=$notif[id_status]
                            AND notif.p_tanggapan=users.username ORDER BY id_notif DESC");
	        while($notip=mysql_fetch_array($sub)){
              echo "@$notip[nama_lengkap] juga memberikan tanggapan pada
			  <a href='media.php?idstatus=$notip[id_status]'>status</a> $notip[p_status]<br/> ";
	         }
       
?>