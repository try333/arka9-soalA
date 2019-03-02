<?php
error_reporting(0);
$kurs = array ( 50000 => 'Rp. 50.000', 20000 => 'Rp. 20.000', 10000 => 'Rp. 10.000', 5000 => 'Rp. 5.000', 2000 => 'Rp. 2.000', 1000 => 'Rp. 1.000', 500 => 'Rp. 500' );

$uang = 50000;

$bayar = 9000;

// total

$total = $uang - $bayar;

$out = array ();

$num = 0;

if ( $total > 0 )
{
foreach ( $kurs AS $cn => $cv )
{
if ( $total >= $cn )
{
while ( $total >= $cn )
{
$out[$num] += 1;

$total -= $cn;
}

$add = ( is_array ( $cv ) ? $cv[0] : $cv );

$out[$num] = '(' . $out[$num] . ' lembar) ' . $add;

$num++;
}
}

echo "kembalian\r\n<br />\r\n" . implode ( "\r\n<br />\r\n-----------\r\n<br />\r\n", $out );

}
else
{
echo 'gaada kembalian';
}

?>
