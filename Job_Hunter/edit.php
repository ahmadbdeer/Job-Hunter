<?php
require_once "pdofile.php";
session_start();
if (isset($_POST['FirstName']) && isset($_POST['LastName'])
    && isset($_POST['Email']) && isset($_POST['User_Phone'])
    && isset($_POST['User_Password']) && isset($_POST['Confirm_Passowrd'])
    && isset($_POST['Resume']) && isset($_POST['id'])) {
    $sql = "UPDATE tsignup SET Fname = :F,
             Lname = :L, Phone = :PH, Email = :E, Password = :P, Cpassword = :C,
             file_name = :R
             
            WHERE User_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':F' => $_POST['FirstName'],
        ':L' => $_POST['LastName'],
        ':PH' => $_POST['User_Phone'],
        ':E' => $_POST['Email'],
        ':P' => $_POST['User_Password'],
        ':C' => $_POST['Confirm_Passowrd'],
        ':R' => $_POST['Resume'],
        ':id' => $_POST['id']
    ));
    $_SESSION['success'] = 'Record updated';
    header('Location: post.php');
    return;
}
$stmt = $pdo->prepare("SELECT * FROM tsignup where User_id = :yes");
$stmt->execute(array(":yes" => $_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    $_SESSION['error'] = 'Bad value for id';
    header('Location: signup.php');
    return;
}
$FirstName = htmlentities($row['Fname']);
$LastName = htmlentities($row['Lname']);
$User_Phone = htmlentities($row['Phone']);
$Email = htmlentities($row['Email']);
$User_Password = htmlentities($row['Password']);
$Confirm_Passowrd = htmlentities($row['Cpassword']);
$Resume = htmlentities($row['file_name']);
$id = htmlentities($row['User_id']);

echo <<< _END
<html><head></head><body>
<p>Edit User</p>
<form method="post">
<p>FirstName:<input type="text" name="FirstName"></p>
<p>LastName:<input type="text" name="LastName"></p>
<p>Email:<input type="Email" name="Email"></p>
<p>User_Phone:<input type="text" name="User_Phone"></p>
<p>User_Password:<input type="text" name="User_Password"></p>
<p>Confirm_Passowrd:<input type="text" name="Confirm_Passowrd"></p>
<p>Resume:<input type="file" name="Resume"></p>
<input type="hidden" name="id" value="$id">

<p><input type="submit" value="Update"/>
<a href="index.php">Cancel</a></p>
</form>
</body>
_END
?>
