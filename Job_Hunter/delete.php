<?php
require_once "pdofile.php";
session_start();
if ( isset($_POST['delete']) && isset($_POST['id']) ) {
    $sql = "DELETE FROM tsignup WHERE User_id = :i";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':i' => $_POST['id']));
    $_SESSION['success'] = 'Record deleted';
    header( 'Location: index.php' ) ;
    return;
}
$stmt = $pdo->prepare("SELECT User_id, Fname FROM tsignup where User_id = :i");
$stmt->execute(array(":i" => $_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for User_id';
    header( 'Location: index.php' ) ;
    return;
}
echo "<p>Confirm: Deleting ".htmlentities($row['User_id'])."</p>\n";
echo('<form method="post"><input type="hidden" ');
echo('name="id" value="'.$row['User_id'].'">'."\n");
echo('<input type="submit" value="Delete" name="delete">');
echo('<a href="index.php">Cancel</a>');
echo("\n</form>\n");
?>
