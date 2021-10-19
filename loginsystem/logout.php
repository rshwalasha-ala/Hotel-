<?php
session_start();
$_SESSION['login']=="";

session_unset();
$_SESSION['action1']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="index.php";
</script>
<?php
//logout.php
setcookie("type", "", time()-3600);

header("location:index.php");

?>
