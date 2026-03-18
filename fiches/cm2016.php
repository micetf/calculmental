<?php
$objectif = "Calculer des produits par 2, 20, 200, 4, 40, 400.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1;$i<16;$i++)
{
		$par = 2;
		$tmp[] = array('q'=>"$i x $par = ", 's'=>$i*$par);
		$tmp[] = array('q'=>"$par x $i = ", 's'=>$i*$par);
		$par = 4;
		$tmp[] = array('q'=>"$i x $par = ", 's'=>$i*$par);
		$tmp[] = array('q'=>"$par x $i = ", 's'=>$i*$par);
		$par = 20;
		$tmp[] = array('q'=>"$i x $par = ", 's'=>$i*$par);
		$tmp[] = array('q'=>"$par x $i = ", 's'=>$i*$par);
		$par = 40;
		$tmp[] = array('q'=>"$i x $par = ", 's'=>$i*$par);
		$tmp[] = array('q'=>"$par x $i = ", 's'=>$i*$par);
		$par = 200;
		$tmp[] = array('q'=>"$i x $par = ", 's'=>$i*$par);
		$tmp[] = array('q'=>"$par x $i = ", 's'=>$i*$par);
		$par = 400;
		$tmp[] = array('q'=>"$i x $par = ", 's'=>$i*$par);
		$tmp[] = array('q'=>"$par x $i = ", 's'=>$i*$par);
}
