<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="dashboard.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Course Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Course Code</td>
				<td><input type="text" name="code"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<!-- <?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$code = $_POST['code'];
		

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO course(name,code) VALUES('$name','$code)");

		// Show message when user added
		echo "Course added successfully. <a href='dashboard.php'>View Users</a>";
	}
	?> -->

	<?php
$link = mysqli_connect("localhost", "root", "", "crud");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO course (name, code) VALUES ('$_POST[name]', '$_POST[code]')";
if(mysqli_query($link, $sql)){
	
   echo "Course added successfully. <a href='dashboard.php'>View Courses</a>";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
</html>