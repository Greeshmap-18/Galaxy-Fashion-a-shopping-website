<?php
include '../config.php';
$admin=new Admin();
if(isset($_GET['psid'])){
    $ps_id=$_GET['psid'];
    $stmt=$admin->cud("UPDATE `shop` SET `ps_status`='Accepted' WHERE `ps_id`='$ps_id'",'updated');
    echo "<script>alert('Accepted Successfull');window.location='../managepetshop.php'</script>";
}
if(isset($_GET['ps_id'])){
    $ps_id=$_GET['ps_id'];
    $stmt=$admin->cud("UPDATE `shop` SET `ps_status`='Rejected' WHERE `ps_id`='$ps_id'",'updated');
    echo "<script>alert('Rejected  Successfull');window.location='../managepetshop.php'</script>";
}
?>