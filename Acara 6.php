<?php
$kelompok = array("Semar","Gareng","Petruk","Semar");
echo $kelompok[0];
echo "<br>";
echo $kelompok[3];
$kelompok[1]="semar";
$kelompok[2]="Gareng";
$kelompok[3]="Petruk";
$kelompok[4]="Bagong";
echo $kelompok[3];

?>

<?php
$number = array(1,2,3,4,5);
foreach($number as $values)
{
echo "value is $values <br/>";
}
$number[0] = "one";
$number[1] = "two";
$number[2] = "three";
$number[3] = "four";
$number[4] = "five";
foreach($number as $values)
{
echo "Value is $values <br/>";
}
?>

<?php
$solaria = array(
    "agus" => 2000,
    "lapar" => 1000,
    "buk" => 500
);
echo "Salary of agus is ". $solaria['agus'] . "<br />";
echo "Salary of lapar is ". $solaria['lapar']. "<br />";
echo "Salary of buk is ". $solaria['buk']. "<br />";
/* Second method to create array. */
$solaria['agus'] = "high";
$solaria['lapar'] = "medium";
$solaria['buk'] = "low";
echo "Salary of agus is ". $solaria['agus'] . "<br />";
echo "Salary of lapar is ". $solaria['lapar']. "<br />";
echo "Salary of buk is ". $solaria['buk']. "<br />";
?>
