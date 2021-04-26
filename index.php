


<?php 
session_start();

    $email = $password = "";
    $errorMessage = "";

    if(isset($_POST['login'])){
        
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        if($email == $_SESSION['email'] && $password == $_SESSION['password']){
            header("Location: dashboard.php");
        }
        
    }

?>






<DOCTYPE! HTML>
<html>
<head>

	<Style> 
.page {
  width: 400px;
  background-color:#f7ede2;
  padding: 32px;
  border-radius: 10px;
  
}

.card {
  width: 400px;
  background-color:#FFFFFF;
  padding: 32px;
  border-radius: 20px;
  margin:32px;
  }


.button_style {
color: black;
background-color: #b5179e;
font-size: 15px;
border-color: blue; 
}

</Style>

</head>
	<body class="page">

	<section class="card">


		<h1> Login  </h1>

<?php
		if (isset($_SESSION ['message']) && !empty($_SESSION['message'])) {
			echo "<span style = 'color: green' >" . $_SESSION['message'] . "</span>";
			session_destroy();
		}

?>
				<form method="post" action="auth.php">

				
<p>		<label>E-mail</label> <br/>
					<input type = "text" name = "email" placeholder="Enter E-mail"> </p>

<p>		<label>Password</label>  <br/>
					<input type = "password" name = "password" placeholder="Set Your Password"> </p>
					
				<button class="button_style" type = "submit" name ="login "> Login </button><br/>

					
				<input type="checkbox" checked>Remember Me  <br/>

				<p> <a href= "password_reset.php"> Forgot Password? </a> </p>

					
		
		</form>
		


		
		<p>  Not yet a member? <a href = "register.php"  > Sign-Up </a> <p>

</session>
</html>