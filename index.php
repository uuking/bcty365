<?php
require_once 'conn/config.inc.php';
$sql=mysqli_query($connect,"select id,title,createtime from tb_tell order by createtime desc limit 0,5");
while ($info=mysqli_fetch_assoc($sql)) {
	$infos[]=$info;
}
$sqluwz=mysqli_query($connect,"select * from tb_soft order by addtime desc limit 0,5");
while ($infouwz=mysqli_fetch_assoc($sqluwz)) {
	$infouwzs[]=$infouwz;
}
$smarty->assign('infouwzs',$infouwzs);
$smarty->assign('infos',$infos);
$smarty->display('index.html');
?>