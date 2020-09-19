<?php 

session_start();
header('location:login.php');
$con = mysqli_connect('localhost', 'cen4010s2020_g14', 'faueng2020');

mysqli_select_db($con,'cen4010s2020_g14');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name= '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_query($result);

if($num == 1){
    echo "Username Already Taken";
}else{
    $reg = "insert into usertable(name, password) values('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}




?>