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


				<form method="post" action="dashboard.php">

				
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