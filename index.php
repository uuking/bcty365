<?php
require_once 'conn/config.inc.php';
// 网站公告
$sql=mysqli_query($connect,"select id,title,createtime from tb_tell order by createtime desc limit 0,5");
while ($info=mysqli_fetch_assoc($sql)) {
	$infos[]=$info;
}
// 软件下载
$sqluwz=mysqli_query($connect,"select * from tb_soft order by addtime desc limit 0,5");
while ($infouwz=mysqli_fetch_assoc($sqluwz)) {
	$infouwzs[]=$infouwz;
}
// 编程词典简介
$sqlbj=mysqli_query($connect,"select * from tb_bccdjj where mark=1");
$infobj=mysqli_fetch_assoc($sqlbj);
// 最新编程词典
$sqlnewbccd=mysqli_query($connect,"select imageaddress, tb_bccd.id as bccdid,bccdname,owner,price,addtime,bbname from tb_bccd left join tb_bb on tb_bccd.bbid=tb_bb.id order by addtime desc limit 0,2");
while ($infonewbccd=mysqli_fetch_assoc($sqlnewbccd)) {
	$infonewbccds[]=$infonewbccd;
}
// 常见问题
$sqlcjwt=mysqli_query($connect,"select * from tb_cjwt order by createtime desc limit 0,3");
while ($infocjwt=mysqli_fetch_array($sqlcjwt)) {
	$infocjwts[]=$infocjwt;
}
// 社区论坛
$sqlbbs=mysqli_query($connect,"select * from tb_bbs order by createtime desc limit 0,3");
while ($infobbs=mysqli_fetch_array($sqlbbs)) {
	$infobbss[]=$infobbs;
}
// 升级下载
$sqlsjxz=mysqli_query($connect,"select * from tb_sjxz order by addtime desc limit 0,3");
while ($infosjxz=mysqli_fetch_array($sqlsjxz)) {
	$infosjxzs[]=$infosjxz;
}

// p($infocjwt);die;
$smarty->assign('infobbss',$infobbss);
$smarty->assign('infosjxzs',$infosjxzs);
$smarty->assign('infocjwts',$infocjwts);
$smarty->assign('infonewbccds',$infonewbccds);
$smarty->assign('infouwzs',$infouwzs);
$smarty->assign('infobj',$infobj);
$smarty->assign('infos',$infos);
$smarty->display('index.html');
?>