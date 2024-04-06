<?php 
session_start();
if (isset($_SESSION['uname'])) {
?>

<!DOCTYPE html>
<html>
    
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="">
</head>

<body>
     <h1>Welcome <?php echo $_SESSION['uname']; ?></h1>
     <h2>ID: <?php echo  $_SESSION['id']; ?></h2>
     <h3><?php echo  $_SESSION['em']; ?></h3>
     <a href="logout.php">Logout</a>

     <h3>Grades</h3>
     <ol type="1">
          <li><a href="gradedet.php">Assignment 1 - 100/100</a></li>
          <li>Test 1 - 80/100</li>
          <li>Quiz 1 - 90/100</li>
          <li>Etc.</li>
     </ol>
     <li>Total - 90% (270/300)</li>
     <br>
     <h4><a href="course.php">Back</a></h4>

</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>