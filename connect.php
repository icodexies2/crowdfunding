<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'signupforms';

$con=mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if ($con){
    echo "connection successful";
}else{
    die(mysqli_connect_error());
}

?>