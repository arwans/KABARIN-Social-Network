<?php
  session_start();
  session_destroy();
  echo "<link type='text/css' rel='stylesheet' media='all' href='kabarin_standar.css' /><div class='kdserror'>
 <center>Anda <a href='login'>sukses </a>keluar</div>";
  header('location:login');
?>
<h1>
<meta http-equiv='refresh' content='0; url=index.php'>
<a href="index.php">[Mengalihkan]</a></h1>