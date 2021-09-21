<?php
$nilai=90;
if (($nilai>=0) && ($nilai<50))
{$grade="E";}
if (($nilai>=50) && ($nilai<60))
{$grade="D";}
if (($nilai>=60) && ($nilai<75))
{$grade="C";}
if (($nilai>=75) && ($nilai<85))
{$grade="B";}
if (($nilai>=85) && ($nilai<100))
{$grade="A";}
else
{$grade="nilai diluar jangkauan";}
echo "nilai anda : $nilai, di konversi menjadi $grade";
?>