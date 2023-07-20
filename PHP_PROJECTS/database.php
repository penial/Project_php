<?php
$dbuser='phpmyadmin';
$dbpass='Charli007';
$basepath='';
$dbname='phpmyadmin';
$dbserver='localhost';
$dbport='3306';
$dbtype='mysql';

$conn=mysqli_connect($db_server,$db_user,$db_name,$dbpass,$dbport);

if($conn){
    echo "inserted successfully";
}
else{
    echo "Database connection failed";
}


?>
