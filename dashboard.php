<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM course ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>

   <p>
    WELCOME!!</p>
<a href="add.php">Add New course</a><br/><br/>

    <table width='80%' border=1>

   
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['code']."</td>";
        
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>

       <a color = red href = "logout.php" > Logout  </a>
</body>
</html>