<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "College";


$conn=mysqli_connect($servername,$username,$dbname);

if($conn){
    echo "inserted successfully";
}
else{
    echo "Database connection failed";
}
$username=$_POST["name"];
$Date_of_joining=$_POST["date_define"];
$Address=$_POST["address"];
$Department=$_POST["department"];
$Phone_number=$_POST["number"];
$Gen=$_POST["gender"];
$Blood_Group=$_POST["Blood"];

$sql="INSERT INTO Staff VALUES('$username','$Date_of_joining','$Address','$Department','$Phone_number','$Gen','$Blood_Group')";
$data=mysqli_query($conn,$sql);
if($data){
    echo "Data inserted sucessfully";

}
else{
    // echo "$username";
    // echo "$Date_of_joining";
    // echo "$Address";
    // echo "$Department";
    // echo "$Phone_number";
    // echo "$Gen";
    // echo "$Blood_Group";
    echo "failed";

}

?>
