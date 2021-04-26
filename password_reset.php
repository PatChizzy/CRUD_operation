 

 <html>
 
 <body>
  <form method="post" action="process_forgot_password.php">
    <p>Enter the email associated with your account </p>
      <input type="text" name="email" placeholder="email">
      <input type="password" name="password" placeholder="Enter new password">
       <input  type="submit" name="submit">
    </form>

   </body>
 </html>

 <?php
if(isset($_POST['submit'])){
if (mysqli_query($db, "UPDATE reg SET password= '$_POST[password]' WHERE email= '$_POST[email]' ")) 
{
 }
 }

?>