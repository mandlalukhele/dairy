<?php require_once('check_login.php');?>
<?php
include 'connect.php';


$sql = "DELETE FROM `admin` WHERE id='".$_GET["id"]."'";
$res = $conn->query($sql) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "view_admin.php";
</script>

