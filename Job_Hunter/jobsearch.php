<?php
session_start();
if (!isset($_SESSION['success'])) {
   $_SESSION['error'] = 'Please log in to search for jobs.';
   header('Location: login.php');
   return;
}
if (isset($_POST['searchKeyword'])) {
   $keyword = $_POST['searchKeyword'];
  
   $sql = "SELECT * FROM JobMenu WHERE JobTitle LIKE :keyword OR JobDescription LIKE :keyword OR Location LIKE :keyword";
   $stmt = $pdo->prepare($sql);
   $stmt->bindValue(':keyword', "%$keyword%");
   $stmt->execute();

   $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
   
   $sql = "SELECT * FROM JobMenu";
   $stmt = $pdo->query($sql);
   $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>


<form method="post">
   <input type="text" name="searchKeyword" placeholder="Search for a job...">
   <input type="submit" value="Search">
</form>


<?php if (!empty($jobs)): ?>
   <h2>Search Results</h2>
   <ul>
      <?php foreach ($jobs as $job): ?>
         <li>
            <strong>Job Title:</strong> <?php echo $job['JobTitle']; ?><br>
            <strong>Description:</strong> <?php echo $job['JobDescription']; ?><br>
            <strong>Experience Required:</strong> <?php echo $job['ExperienceRequired']; ?><br>
            <strong>Salary:</strong> <?php echo $job['Salary']; ?><br>
            <strong>Location:</strong> <?php echo $job['Location']; ?><br>
            <strong>Company:</strong> <?php echo $job['CompanyName']; ?><br>
         </li>
      <?php endforeach; ?>
   </ul>
<?php else: ?>
   <p>No jobs found.</p>
<?php endif; ?>
