
<?php session_start();

    $first_name = $last_name = $email = $password = "";
    $errorMessage = "";

    if(isset($_POST['submit'])){
        
        $first_name = strip_tags($_POST['first_name']);
        $last_name = strip_tags($_POST['last_name']);
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
      


        $_SESSION['firstName'] = $first_name;
        $_SESSION['lastName'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        

        if(empty($first_name)){
            $errorMessage = "Please put an input here";
        }
        if(empty($last_name)){
            $errorMessage = "Please put an input here";
        }
      
        if(empty($email)){
            $errorMessage = "Please put an input here";
        }
 
        if(empty($password)){
            $errorMessage = "Please put an input here";
           }
        if(empty($errorMessage)){
            header("Location: index.php");
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

  <body class="page" >

    <main  background-color = #b5179e>
   

    <div class="card">
    <h1> Fill out the form below to register  </h1>
          
    
    <P>   <form method="POST" action="db.php"> </p>

    <p>   <label >First Name </label>  <br/>
          <input type = "text" name ="first_name" placeholder="Enter your First Name"> </p>
    
    <p>   <label >Last Name </label> <br/>
          <input type = "text" name ="last_name" placeholder="Enter your Last Name" > </p>
      

    <p>   <label>E-mail</label> <br/>
          <input type = "text" name = "email" placeholder="Enter E-mail" > </p>

          
    <p>   <label>Password</label>  <br/>
          <input type = "password" name = "password" placeholder="Set Your Password" > </p>

          
    <p>   <button class="button_style" type = "submit" name ="submit"> Sign-Up </button> </p>
          
        <input type="checkbox" checked>Remember Me 
    
  <p>  Already have an account? <a href = "index.php"  > Login </a> <p>

    </form>
    </div>
    </main>
    </html>