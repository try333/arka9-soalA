<?php 
jumlah(orang(6));

function jumlah($x)
{
	echo "<h1>".$x."</h1>";
}

function orang($jml)
{
	$total = 0;
	for ($i=0; $i < $jml; $i++) { 
		$total = $total + $i;
	}
	return $total;
}

