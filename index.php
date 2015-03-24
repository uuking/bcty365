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

$sqlnewbccd=mysqli_query($connect,"select imageaddress, tb_bccd.id as bccdid,bccdname,owner,price,addtime,bbname from tb_bccd left join tb_bb on tb_bccd.bbid=tb_bb.id order by addtime desc limit 0,2");
while ($infonewbccd=mysqli_fetch_assoc($sqlnewbccd)) {
	$infonewbccds[]=$infonewbccd;
}
// p($infonewbccds);die;
$smarty->assign('infonewbccds',$infonewbccds);
$smarty->assign('infouwzs',$infouwzs);
$smarty->assign('infobj',$infobj);
$smarty->assign('infos',$infos);
$smarty->display('index.html');
?>