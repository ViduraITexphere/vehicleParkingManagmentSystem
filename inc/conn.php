<?php
//defining host
$host = "localhost";
//define username
$username = "root";
//define password
$password = "";
//define database
$database = "vehicleparkmanagment";

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
    die("database connection faild". mysqli_error($conn));

}else{
    // echo "database connection success!";
}

?>