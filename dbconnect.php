
//Mansi Her i made added a comment


<?php
$servername="sql12.freemysqlhosting.net";
$username="sql12599089";
$password="qYKI6bwqKS";
$database="sql12599089";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("connection failed : ".mysqli_connect_error($conn));
}

?>