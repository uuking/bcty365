<?php
require_once 'conn/config.inc.php';
$sqlxs=mysqli_query($connect,"select * from tb_soft where id='".$_GET['id']."'");
$infoxs=mysqli_fetch_assoc($sqlxs);
$smarty->assign("infoxs",$infoxs);
$smarty->display("softinfo.html");
?>