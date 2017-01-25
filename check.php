<?php
	$user=_GET['user'];
	$pass=_GET['pass'];
	mysqli=new mysqli("localhost","root","pass","users");
	$query="SELECT * FROM userdata";
    if($re=$mysqli->query($query)){
        while($row=$re->fetch_row()){
            if($user==$row[0]&&$pass==$row[1]){
            	echo "true";
            }
        }
    }
    echo "false";
?>
