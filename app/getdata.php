<?php 
require_once'config.inc.php';
if (mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" . mysqli_connect_errno() . ")"
);
}

$msg = $_POST['msg'];
$id = $_POST['id'];

function getData($id)
    {

        $query = "SELECT `message` FROM `sentmsg` WHERE id=$id";
        $res = mysqli_query($connection, $qu);

        if (!$res) {
            die("Database query failed.");
        }
   
		
		return($res);
    }

mysqli_close($connection);
?>