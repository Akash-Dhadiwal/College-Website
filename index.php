
<?php
	session_start();
	include("connect_db.php");
	if(isset($_POST['submit_admin'])){
		$uname=$_POST['username'];
			$password=$_POST['password'];
			if($uname=="" || $password==""){
				echo "<script>alert('Enter the username and password')</script>";
			}
		else{
			$query="Select * from admin where username ='$uname' && password='$password';";
			$result=mysqli_query($sqli,$query);
			if(mysqli_affected_rows($sqli)>0){
				$_SESSION["key"]=$uname;
				header("Location:adminpage.php");
			}
		}
}
?>
<!DOCTYPE html>
	<head>
		<title>
			VIT College Portal
		</title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:weight@100&display=swap" rel="stylesheet">
	</head>


<body>
	<!-- Navbar design HTML code  -->
		<?php 
			include("Navbar.php");

		 ?>


	<!-- Body1 design HTML code    -->
	<div class="container mt-5 mb-5 " style="height: 100vh">
		<div class="row m-5 pt-5">
			<div class="col-md-7">
				
				<table  cellspacing="20" cellpadding="40" width="100%" style="margin-bottom: 2em">
					<tr >
						<th>
							<h5>One way stop for notes and more</h5>
						</th>
					</tr>


					<tr>
						<table   cellpadding="5" width="100%">
							<tr>
								<th width="100">
								<a href="Notes.php">Notes</a>	
								</th>
								<th width="100">
								<a href="Syllabus.php">Syllabus</a>	
								</th>
							</tr>
							<tr>
								<td width="100">
									Find the notes.
								</td>
								<td width="100">
									Find the UGC sysllabus of all the subjects
								</td>
							</tr>
							</table>
					</tr>
					<tr>
						<table class="mt-5" cellpadding="5"	 width="100%">
							<tr>
								<th width="100">
								<a href="Notices.php">Notices</a>	
								</th>
								<th width="100">
								<a href="ExamPaper.php">Exam paper</a>
								</th>
							</tr>
							<tr>
								<td width="100">
									Check out the latest updates from admins without any hassle.
								</td>
								<td width="100">
									Find the previous year papers.
								</td>
							</tr>
							</table>
					</tr>
				</table>
			</div>
			<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
			<div class="col-md-5">
				<div class="container bg-warning p-2  mt-1">
					<div class="card-primary mt-3">
						<div class="card-title">
							<center><h5>User access</h5></center>
						</div>
						<hr/>
						<div class="card-body">
							<form onsubmit="return valid()" class="form-group" method="POST">
								<input type="text" name="username" class="form-control" placeholder="Gmail" />
								<input type="text" name="password" class="form-control mt-4" placeholder="Password" />
							 	<button type="submit" name="submit_admin" class="btn btn-primary mt-5 form-control">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of body1    -->

	

<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
<script type="text/javascript">
	
</script>
<html>

