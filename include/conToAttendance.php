<?php
session_start();
require_once 'pdo.inc.php';
$date = date('y-m-d');
//print_r($_GET);
$atten = $_GET['name'];
$students ="date";
$val = $date;
$test = $students.implode(', ',$atten);
foreach ($atten as $name){
    $students = $students.", ".$name;
    $val = $val.", "."1";
}

/*echo $students;
echo $val;
echo $test;
*/
$insertQuery = array();
$insertData = array();
$val = array();
foreach ($atten as $name){
    $insertQuery[] = '?';
    $insertData[] = $name;
    $val[] = 1;

}

echo "<br>";
print_r($insertQuery);
print_r($insertData);
print_r($val);
echo "<br>";

$sql = 'INSERT INTO attendance (ravin, Sasuke, Naruto) VALUES (';
/*$sql .= implode(", ", $insertQuery);
$sql .= ') VALUES (';*/
$sql .= implode(", ", $insertQuery).')';
print_r($sql);
//$sql = "INSERT INTO attendance(:present) VALUES (:val)";
$stmt = $pdo->prepare($sql);
$stmt->execute($val);