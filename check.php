<?php
	$user=$POST['user'];
	$pass=$POST['pass'];
	$type=1;//_GET['type']
	mysqli=new mysqli("localhost","root","pass","users");
	if($type==1){
		$query="SELECT * FROM userdata";
	    if($re=$mysqli->query($query)){
	        while($row=$re->fetch_row()){
	            if($user==$row[0]&&$pass==$row[1]){
	            	echo "Logged in";//header("Location: ./student.html");
	            }
	        }
	    }
	    echo "FAIL";
	}else{
		$query="INSERT into userdata(user,password) values()"
		if($re=$mysqli->query($query)){
	        echo "Signed Up";//header('Location: ../student.html');
		}
	}
?>
