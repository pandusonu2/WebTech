<html>
	<head>
		<title>ERROR PAGE</title>
	</head>
	<style>
		.fullScreen{
			background-color: #e8e8e8;
		    width: 100%;
		    height: auto;
		    bottom: 0px;
		    top: 0px;
		    left: 0;
		    position: absolute;
		}
		.center {
			font-size: 25px;
		    position: absolute;
		    width: 100px;
		    top: 50%;
		    text-align: center;
		    margin-top: -25px; 
		}​
	</style>
	<body>
		<div class='fullScreen'>
			<h1 class='center'>
				<?php
					$mysqli=new mysqli("localhost","root","","users");
					$type=$_POST['key'];
					if($type=="sl"){
						$query="SELECT * FROM db where tors=0 and valid=1";
						if($re=$mysqli->query($query)){
							while($row=$re->fetch_row()){
								if($row[0]==$_POST['user'] && $row[1]==$_POST['pass']){
									header('Location: student.php?name='.$_POST['user']);
									exit;
								}
							}
						}
						echo "ERROR";
					}else if($type=="ss"){
						$user=$_POST['user'];
						$pass=$_POST['pass'];
						if($pass != $_POST['rpass']){
							echo "Both times, password should be same";
							exit;
						}
						$fname=$_POST['fname'];
						$lname=$_POST['lname'];
						$roll=$_POST['roll'];
						$query="INSERT INTO `db` (`user`, `pass`, `fname`, `lname`, `roll`, `tors`, `valid`) VALUES ('$user', '$pass', '$fname', '$lname', '$roll', '0', '0');";
						if($re=$mysqli->query($query))
							echo "Success";
						else echo "Error";
					}else if($type=="tl"){
						$query="SELECT * FROM db where tors=1";
						if($re=$mysqli->query($query)){
							while($row=$re->fetch_row()){
								if($row[0]==$_POST['user'] && $row[1]==$_POST['pass']){
									header('Location: teacher.php?name='.$_POST['user']);
									exit;
								}
							}
						}
						echo "FAIL";
					}else if($type=="ts"){
						$user=$_POST['user'];
						$pass=$_POST['pass'];
						if($pass != $_POST['rpass']){
							echo "Both times, password should be same";
							exit;
						}
						$fname=$_POST['fname'];
						$lname=$_POST['lname'];
						$query="INSERT INTO `db` (`user`, `pass`, `fname`, `lname`, `tors`, `valid`) VALUES ('$user', '$pass', '$fname', '$lname', '1', '1');";
						if($re=$mysqli->query($query))
							echo "Success";
						else echo "Error";
					}
				?>
			</h1>
			</div>
		</div>
	</body>
</html>
