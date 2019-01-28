<?php
//connect to mysql
$con = mysqli_connect("localhost","root","","shoutit");

//test connection
if(mysqli_connect_errno()){
echo 'failed to connect to Mysql: '.mysqli_connect_error();

}