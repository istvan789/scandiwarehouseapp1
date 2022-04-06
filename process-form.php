<?php
    session_start();
    $sku = $_POST["sku"];
    $name1 = $_POST["name1"];
    $price = $_POST["price"];
    $category1 = $_POST["category1"];
    $size = $_POST["size"];
    $height = $_POST["height"];
    $width = $_POST["width"];
    $length = $_POST["length"];
    $weight = $_POST["weight"];


    /*var_dump($sku, $name1, $price, $category1, $size, $height, $width, $length, $weight); */

    /*$host = "localhost";
    $dbname = "scandiwarehouseapp";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $dbname);*/

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

    if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_error());
    }

   $sql = "INSERT INTO productlist (sku, name1, price, category1, size, height, width, length, weight)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sssssssss", 
                            $sku, $name1, $price, $category1, $size, $height, $width, $length, $weight);


    mysqli_stmt_execute($stmt);

    //echo "Record saved.";

    if($query_run)
    {
        $_SESSION['status'] = "Data Not adedd";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Data Adedd Succesfully";
        header("Location: index.php");
    }




?>