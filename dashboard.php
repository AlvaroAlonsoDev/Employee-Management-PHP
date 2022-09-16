<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: index.php");	exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: index.php");	exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
		<header>
			<h2>Welcome <?php echo $_SESSION['user']; ?><h2>
			<a href="?logout">Log out</a>	
		</header>

		<main>
			<h3>Some user actions ......</h3>
		</main>
	</div>
</body>
</html>