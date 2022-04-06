<?php

/*$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "scandiwarehouseapp";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$dbcon = mysqli_select_db($conn, $dbName); */

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
$dbcon = mysqli_select_db($conn, $cleardb_db);

    //check db connection
    if(!$conn)
    {
        die("Connection Failed: ". mysqli_connect_error());
    }
   
?>