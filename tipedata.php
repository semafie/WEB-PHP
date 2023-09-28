<?php
$x = 5985;
var_dump($x);
echo "<br>";
$y = -345;
var_dump($x);
echo "<br>";
$x = 0X87;
var_dump($x);
echo "<br>";
$x = 047;
var_dump($x);
echo "<br>";
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
echo "<br>";
var_dump($y);
echo strlen("Hello World!");
echo strpos("Hello World!","World");


for ($i=0; $i <100; $i++)
{
  if ($i==13)
  {
  break;
  }             
echo $i ;
echo "<br />";
} 

$i=0;
while ($i < 100)
{
  $i++;
  if ($i==13)
  {
  break;
  }
echo $i;
echo "<br />";
}


for ($i=0; $i <10; $i++)
{
  if ($i==7)
  {
  continue;
  }
echo $i;
echo "<br />";
}
?>