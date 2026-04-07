<?php
echo date("d-m-Y h:i:s A")."<br>";

$dob="2006-01-01";
$age=date("Y")-date("Y",strtotime($dob));

echo "Age: $age<br>";

echo "Day: ".date("d")."<br>";
echo "Month: ".date("m")."<br>";
echo "Year: ".date("Y");
?>