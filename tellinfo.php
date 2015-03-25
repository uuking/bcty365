<?php
require_once 'conn/config.inc.php';
$sql=mysqli_query($connect,"select * from tb_tell where id='".$_GET["id"]."'");
$info=mysqli_fetch_assoc($sql);
$smarty->assign("info",$info);
$smarty->display("tellinfo.html");
?>