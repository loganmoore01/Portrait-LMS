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

     <h3>CSC 4020 Network Security</h3>
     <ol type="1">
          <li><a href="assignment.php">Assignments</a></li>
          <li>Tests</li>
          <li>Quizes</li>
          <li>Files</li>
          <li><a href="grade.php">Grades</a></li>
          <li>Etc.</li>
     </ol>
     <br>
     <h4><a href="home.php">Back</a></h4>

</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>