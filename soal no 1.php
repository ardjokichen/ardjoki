<?php
function biodata(){
$nama ="Ardjoki";
$alamatrumah ="Jalan tanjung uban no 5-6 km 11 ";
$hobi =  array("baca manga", "nonton anime" , "main game");
$is_married = True;
$sekolah = [
		'highSchool' => "SMK NEGERI 1 TANJUNG PINANG"
		'university' => "tidak ada "
		];
$skill=[];
$skills =array(1 => 'python',2 =>'html',3 =>'CSS',4 =>'JS', 5 => 'PHP');

	$skill[] = $skills;

$biografi =array();

$biografi['nama']=$nama;
$biografi['alamatrumah']=$alamatrumah;
$biografi['hobi']=$hobi;
$biografi['is_married']= $is_married;
$biografi['sekolah']= $sekolah;
$biografi['skills']= $skill;

return json_encode($biografi,JSON_PRETTY_PRINT);

}

echo biodata();
