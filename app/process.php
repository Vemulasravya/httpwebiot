<?php // Create a database connection.
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "httpiot";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Test if connection occurred.
if (mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" . mysqli_connect_errno() . ")"
);
}

$msg = $_POST['msg'];
$id = $_POST['id'];



$query  = " INSERT INTO `sentmsg`(`id`, `message`) VALUES ('$id','$msg')";

 $result = mysqli_query($connection, $query);
     if ($result) {
            header('Location:index.php');
        } 
       else 
		{
            die("Database query failed. " . mysqli_error($connection)); 
        }

	
mysqli_close($connection);

?>
