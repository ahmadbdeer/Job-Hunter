<?php
require_once "pdofile.php";
session_start();
?>
<html><head></head>
<body>
<?php
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}
echo('<table border="1">'."\n");
echo('<table border="1">'."\n");
$stmt = $pdo->query("SELECT User_id, Fname, Lname, Phone, Email, Password, Cpassword, file_name FROM tsignup");
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo($row['User_id']);
    echo("</td><td>");
    echo($row['Fname']);
    echo("</td><td>");
    echo($row['Lname']);
    echo("</td><td>");
    echo($row['Phone']);
    echo("</td><td>");
	echo($row['Email']);
    echo("</td><td>");
	echo($row['Password']);
    echo("</td><td>");
	echo($row['Cpassword']);
    echo("</td><td>");
	echo($row['file_name']);
    echo("</td><td>");
	
	echo('<a href="edit.php?id='.htmlentities($row['User_id']).'">Edit</a> / ');
    echo('<a href="delete.php?id='.htmlentities($row['User_id']).'">Delete</a>');
    echo("\n</form>\n");
    echo("</td></tr>\n");
}
?>
</table>
<p><a href="add.php">Add New</a></p>

