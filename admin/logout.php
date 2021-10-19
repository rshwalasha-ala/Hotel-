<?php
session_start();
$_SESSION['login']=="";

session_unset();
$_SESSION['action1']="Sie haben sich erfolgreich abgemeldet..!";

//Cookies entfernen
setcookie("user","",time()-(3600*24*365)); 

 
echo "Logout erfolgreich";


?>
<script language="javascript">
document.location="index.php";
</script>
