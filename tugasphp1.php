<?php

$nilai = [80,70,55,60,90,95,75,65,58,77,78,82,84,92,76];

$rata=0;

echo "Nilai : ";

foreach ($nilai as $value) {
	echo "$value, ";
	$rata=$rata+$value;
}

$rata=$rata/15;
echo "<br/>";
echo "Nilai rata-rata adalah $rata";
echo "<br/>";
if($rata>50){
echo "Lulus dengan nilai ";
if ($rata>80 && rata<=100){
	echo "A";
}elseif ($rata>70 && rata<=80) {
	echo "B";
}elseif ($rata>60 && rata<=70) {
	echo "C";
}elseif ($rata>70 && rata<=80) {
	echo "D";
}
}else{
	echo "Tidak lulus dengan nilai E";
}
echo "<br/>";
echo "Daftar 5 nilai terendah : ";
sort($nilai);
for ($i=0; $i <5; $i++) { 
	echo "$nilai[$i], ";
}
echo "<br/>";
echo "Daftar 5 nilai tertinggi : ";
for ($i=14; $i >9; $i--) { 
	echo "$nilai[$i], ";
}

?>