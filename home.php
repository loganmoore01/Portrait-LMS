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

     <h3>Your Courses</h3>
     <ol type="1">
          <li><a href="course.php">CSC 4020 Network Security</a></li>
          <li>ITC 4940 Capstone Project In Information Technology</li>
          <li>Etc.</li>
     </ol>

</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>