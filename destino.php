<?php
  $email=base64_decode($_GET["email"]);
  $name=base64_decode($_GET["name"]);

?>


<HTML>
<HEAD>
<TITLE>destino.php</TITLE>
</HEAD>
<BODY>

  Variable "email": <?php echo $email ?> 
  <br>
  Variable "name": <?php echo $name ?>
 
</BODY>
</HTML>