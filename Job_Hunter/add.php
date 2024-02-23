<?php
require_once "pdofile.php";
session_start();

if (isset($_POST['FirstName']) && isset($_POST['LastName'])
    && isset($_POST['Email']) && isset($_POST['User_Phone'])
    && isset($_POST['User_Password']) && isset($_POST['Confirm_Passowrd'])
    && isset($_POST['Resume'])) {
  
    $sql = "INSERT INTO tsignup (Fname, Lname, Phone, Email, Password, Cpassword, file_name)
               VALUES (:F, :L, :PH, :E, :P, :C, :R)";
  
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':F' => $_POST['FirstName'],
        ':L' => $_POST['LastName'],
        ':PH' => $_POST['User_Phone'],
        ':E' => $_POST['Email'],
        ':P' => $_POST['User_Password'],
        ':C' => $_POST['Confirm_Passowrd'],
        ':R' => $_POST['Resume']
    ));

    $_SESSION['success'] = 'Record Added';
    header('Location: index.php');
    return;
}
?>

<p>Add A New User</p>
<form method="post">
<p>FirstName:<input type="text" name="FirstName"></p>
<p>LastName:<input type="text" name="LastName"></p>
<p>Email:<input type="Email" name="Email"></p>
<p>User_Phone:<input type="text" name="User_Phone"></p>
<p>User_Password:<input type="text" name="User_Password"></p>
<p>Confirm_Passowrd:<input type="text" name="Confirm_Passowrd"></p>
<p>Resume:<input type="file" name="Resume"></p>
<p><input type="submit" value="Add New"/>
<a href="index.php">Cancel</a></p>
</form>
