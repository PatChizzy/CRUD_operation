<?php
if(isset($_POST['submit'])){
if (mysqli_query($mysql_select_db, "UPDATE reg SET password= '$_POST[password]' WHERE email= '$_POST[email]' ")) 
{
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  }
?>mysql_connect('localhost','root','');
  mysql_select_db('sample');
  $select=mysql_query("select email,password from user");
  if(mysql_num_rows($select)==1)
  {
    ?>
    <form method="post" action="submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}