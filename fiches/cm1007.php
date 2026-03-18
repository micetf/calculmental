<?php
$objectif = "Maîtriser les tables de multiplication (3,4,8,10 et 100).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1;$i<10;$i++)
{
		$m3 = $i*3;
		$m4 = $i*4;
		$m8 = $i*8;
		$m10 = $i*10;
		$m100 = $i*100;
		
		$tmp[] = array('q'=>"$i x 3 = ", 's'=>$i*3);
		$tmp[] = array('q'=>"3 x $i = ", 's'=>$i*3);
		$tmp[] = array('q'=>"$m3 = 3 x ", 's'=>$m3/3);
		$tmp[] = array('q'=>"$i x 4 = ", 's'=>$i*4);
		$tmp[] = array('q'=>"4 x $i = ", 's'=>$i*4);
		$tmp[] = array('q'=>"$m4 = 4 x ", 's'=>$m4/4);
		$tmp[] = array('q'=>"$i x 8 = ", 's'=>$i*8);
		$tmp[] = array('q'=>"8 x $i = ", 's'=>$i*8);
		$tmp[] = array('q'=>"$m8 = 8 x ", 's'=>$m8/8);
		$tmp[] = array('q'=>"$i x 10 = ", 's'=>$i*10);
		$tmp[] = array('q'=>"10 x $i = ", 's'=>$i*10);
		$tmp[] = array('q'=>"$m10 = 10 x ", 's'=>$m10/10);
}
