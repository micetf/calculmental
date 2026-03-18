<?php
$objectif = "Maîtriser les tables de multiplication (2,4,5 et 10).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1;$i<10;$i++)
{
		$m2 = $i*2;
		$m4 = $i*4;
		$m5 = $i*5;
		$m10 = $i*10;
		
		$tmp[] = array('q'=>"$i x 2 = ", 's'=>$i*2);
		$tmp[] = array('q'=>"2 x $i = ", 's'=>$i*2);
		$tmp[] = array('q'=>"$m2 = 2 x ", 's'=>$m2/2);
		$tmp[] = array('q'=>"$i x 4 = ", 's'=>$i*4);
		$tmp[] = array('q'=>"4 x $i = ", 's'=>$i*4);
		$tmp[] = array('q'=>"$m4 = 4 x ", 's'=>$m4/4);
		$tmp[] = array('q'=>"$i x 5 = ", 's'=>$i*5);
		$tmp[] = array('q'=>"5 x $i = ", 's'=>$i*5);
		$tmp[] = array('q'=>"$m5 = 5 x ", 's'=>$m5/5);
		$tmp[] = array('q'=>"$i x 10 = ", 's'=>$i*10);
		$tmp[] = array('q'=>"10 x $i = ", 's'=>$i*10);
		$tmp[] = array('q'=>"$m10 = 10 x ", 's'=>$m10/10);
}
