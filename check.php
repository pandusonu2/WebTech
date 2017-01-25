<?php
	$user=_GET['user'];
	$pass=_GET['pass'];
	$type=_GET['type']
	mysqli=new mysqli("localhost","root","pass","users");
	if($type==1){
		$query="SELECT * FROM userdata";
	    if($re=$mysqli->query($query)){
	        while($row=$re->fetch_row()){
	            if($user==$row[0]&&$pass==$row[1]){
	            	echo "true";
	            }
	        }
	    }
	    echo "false";
	}else{
		$query="INSERT into userdata(user,password) values()"
		if($re=$mysqli->query($query)){
			echo "true";
		}
	}
?>
