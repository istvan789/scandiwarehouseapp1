<?php 

session_start();

/*$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "scandiwarehouseapp";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);*/

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
    if(isset($_POST['delete_multiple_btn']))
{
    $all_id = $_POST['multip_delete_id'];
    $extract_id = implode(',', $all_id);
    //echo $extract_id;

    $query ="DELETE FROM productlist WHERE id IN($extract_id)";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Deleted Succesfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Deleted";
        header("Location: index.php");
    }

}

?>