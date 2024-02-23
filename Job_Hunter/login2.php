<?php
require_once "pdofile.php";
session_start();

if (isset($_POST['User_Email']) && isset($_POST['User_Password'])) {
   $e = $_POST['User_Email'];
   $p = $_POST['User_Password'];
   $sql = "SELECT Fname FROM tsignup
        WHERE Email = '$e'
        AND Password = '$p'";
   $stmt = $pdo->query($sql);
   
   if ($stmt->rowCount() == 1) {
      $_SESSION['success'] = 'success';
      header('Location: login.php');
      return;
   } else {
      $_SESSION['error'] = 'Incorrect email or password.';
      header('Location: login.php');
      return;
   }
}
?>    

<p>Please Login</p>
<form method="post">
   <p>Email:<input type="email" name="User_Email"></p>
   <p>User_Password:<input type="password" name="User_Password"></p>

   <p><input type="submit" value="Login"/>
   <a href="index.php">Cancel</a></p>
</form>
