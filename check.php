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
					/*$query="CREATE TABLE IF NOT EXISTS`db` (	`user` varchar(50),
								            	`pass` varchar(50),
									`fname` varchar(50),
									`lname` varchar(50),
									`gender` varchar(10),
									`dept` varchar(5),
									`roll` varchar(2),
									`email` varchar(50),
									`address` varchar(50),
									`tenInsti` varchar(50),
									`tenPer` varchar(3),
									`tenYear` varchar(4),
									`twelveInsti` varchar(50),
									`twelvePer` varchar(3),
									`twelveYear` varchar(4),
									`btechInsti` varchar(50),
									`btechPer` varchar(3),
									`btechYear` varchar(4),
									`mtechInsti` varchar(50),
									`mtechPer` varchar(3),
									`mtechYear` varchar(4),
									`phdInsti` varchar(50),
									`phdPer` varchar(3),
									`phdYear` varchar(4),
									`tors` varchar(1),
									`valid` varchar(1),
									primary key(user,tors));"*/
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
						$gender=$_POST['gender'];
						$dept=$_POST['dept'];
						$roll=$_POST['roll'];
						$email=$_POST['email'];
						$address=$_POST['address'];
						$tenInsti=$_POST['tenInsti'];
						$tenPer=$_POST['tenPer'];
						$tenYear=$_POST['tenYear'];
						$twelveInsti=$_POST['twelveInsti'];
						$twelvePer=$_POST['twelvePer'];
						$twelveYear=$_POST['twelveYear'];
						$btechInsti=$_POST['btechInsti'];
						$btechPer=$_POST['btechPer'];
						$btechYear=$_POST['btechYear'];
						$mtechInsti=$_POST['mtechInsti'];
						$mtechPer=$_POST['mtechPer'];
						$mtechYear=$_POST['mtechYear'];
						$query="INSERT INTO `db` (`user`, `pass`, `fname`, `lname`, `gender`,`dept`,`roll`,`email`,`address`,
							`tenInsti`,`tenPer`,`tenYear`,`twelveInsti`,`twelvePer`,`twelveYear`,
							`btechInsti`,`btechPer`,`btechYear`,`mtechInsti`,`mtechPer`,`mtechYear`,
							`tors`,`valid`) 
							VALUES('$user','$pass','$fname','$lname','$gender','$dept','$roll','$email','$address',
								'$tenInsti','$tenPer','$tenYear','$twelveInsti','$twelvePer','$twelveYear',
								'$btechInsti','$btechPer','$btechYear','$mtechInsti','$mtechPer','$mtechYear',
								'0','0');";
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
						$roll=$_POST['roll'];
						$gender=$_POST['gender'];
						$dept=$_POST['dept'];
						$roll=$_POST['roll'];
						$email=$_POST['email'];
						$address=$_POST['address'];
						$tenInsti=$_POST['tenInsti'];
						$tenPer=$_POST['tenPer'];
						$tenYear=$_POST['tenYear'];
						$twelveInsti=$_POST['twelveInsti'];
						$twelvePer=$_POST['twelvePer'];
						$twelveYear=$_POST['twelveYear'];
						$btechInsti=$_POST['btechInsti'];
						$btechPer=$_POST['btechPer'];
						$btechYear=$_POST['btechYear'];
						$mtechInsti=$_POST['mtechInsti'];
						$mtechPer=$_POST['mtechPer'];
						$mtechYear=$_POST['mtechYear'];
						$phdInsti=$_POST['phdInsti'];
						$phdPer=$_POST['phdPer'];
						$phdYear=$_POST['phdYear'];
						$query="INSERT INTO `db` (`user`, `pass`, `fname`, `lname`, `gender`,`dept`,`roll`,`email`,`address`,
							`tenInsti`,`tenPer`,`tenYear`,`twelveInsti`,`twelvePer`,`twelveYear`,
							`btechInsti`,`btechPer`,`btechYear`,`mtechInsti`,`mtechPer`,`mtechYear`,
							`phdInsti`,`phdPer`,`phdInsti`,`tors`,`valid`) 
							VALUES('$user','$pass','$fname','$lname','$gender','$dept','$roll','$email','$address',
								'$tenInsti','$tenPer','$tenYear','$twelveInsti','$twelvePer','$twelveYear',
								'$btechInsti','$btechPer','$btechYear','$mtechInsti','$mtechPer','$mtechYear',
								'$phdInsti','$phdPer','$phdYear','0','0');";
						echo $query;
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
