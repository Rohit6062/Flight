<?php
$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed due to ".mysqli_connect_error());
}

$ID=$_POST['ID'];
$trip=$_POST['trip'];
$from=$_POST['from'];
$To=$_POST['To'];
$date=$_POST['date'];
$tickets=$_POST['No_of_tickets'];
$class=$_POST['class'];

// echo $name.$address.$contact.$passport;
$sql="INSERT INTO `flight`.`book` (`ID`, `flight_way`, `from`, `to`, `date`, `tickets`, `class`) VALUES ('$ID', '$trip', '$from', '$To', '$date', '$tickets', '$class');";
if(($con->query($sql))==true){
    
}
else{
    echo "error : $sql2 <br> $con->error";
}
header('location:main.html');
?>