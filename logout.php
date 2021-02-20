<?php 
session_start();
session_destroy();
echo ("<script> alert=('Thankyou for using our Website')</script>");
echo "<script type='text/javascript'>window.top.location='/index.php';</script>"; exit;
?>