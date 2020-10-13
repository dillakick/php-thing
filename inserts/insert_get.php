<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "afacebook");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$rank = mysqli_real_escape_string($link, $_REQUEST['rank']);
 
// Attempt insert query execution
$sql = "INSERT INTO persons (name, rank) VALUES ('$name', '$rank')";
if(mysqli_query($link, $sql)){
    echo "<h1>Done!</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

</body>
</html>