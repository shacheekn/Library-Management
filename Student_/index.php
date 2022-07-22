<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body>
	<div class="wrapper">
		<header>
		
		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul class="list">
						<li class="l" ><a href="index.php">HOME</a></li>
						<li class="l"><a href="books.php">BOOKS</a></li>
						<li class="l"><a href="logout.php">LOGOUT</a></li>
						<li class="l"><a href="feedback.php">CONTACT</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul class="list">
								<li class="l"><a href="index.php">HOME</a></li>
								<li class="l"><a href="books.php">BOOKS</a></li>
								<li class="l"><a href="student_login.php">LOGIN</a></li>
								<li class="l"><a href="registration.php">SIGN-UP</a></li>
								<li class="l"><a href="feedback.php">CONTACT</a></li>
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">LIBRARY MANAGEMENT SYSTEM</h1><br><br>
				
			</div>
		</div>
		</section>
		

	</div>
	<?php  

		include "footer.php";
	?>
</body>
</html>