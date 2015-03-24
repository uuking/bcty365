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

$sqlbj=mysqli_query($connect,"select * from tb_bccdjj where mark=1");
$infobj=mysqli_fetch_assoc($sqlbj);

$smarty->assign('infouwzs',$infouwzs);
$smarty->assign('infobj',$infobj);
$smarty->assign('infos',$infos);
$smarty->display('index.html');
?>