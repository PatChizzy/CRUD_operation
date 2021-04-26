


<?php
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO user (first_name, last_name, email, password) VALUES ('$_POST[first_name]','$_POST[last_name]', '$_POST[email]','$_POST[password]')";
if(mysqli_query($link, $sql)){
	header('Location: login.php');
    echo "Registered successfully.";



} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>