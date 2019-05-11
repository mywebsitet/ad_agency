<!DOCTYPE html>
<html>
<body>

<?php
//echo "Today is " . date("Y-m-d") ."<br> ";
$i=  date("Y-m-d");
echo $i ."<br>";
$date=date_create($i);
date_add($date,date_interval_create_from_date_string("365 day"));


$is=date_format($date,"Y-m-d");

$date1 = new DateTime("now");
$date2 = new DateTime("tomorrow");

var_dump($date1 == $date2);
$id=var_dump($date1 <= $date2);
var_dump($date1 > $date2);
echo $id;
echo $is;
?>

</body>
</html>