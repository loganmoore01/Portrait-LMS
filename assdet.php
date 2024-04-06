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

     <h3>Assignment 1</h3>

     <form method="post" enctype="multipart/form-data">
        <div>
            <label for="file">Upload your favorite picture!</label><br>
            <input type="file" id="file" name="file" required>
        </div>
        <div>
            <br>
            <button>Submit</button>
        </div>
    </form>


     <br>
     <h4><a href="assignment.php">Back</a></h4>

</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>