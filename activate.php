<?php
            $mysqli=new mysqli("localhost","root","","users");
            $query = "UPDATE db SET valid = '1' WHERE user = '".$_GET['user'] ."';";
            //echo $query;
            if(!($re=$mysqli->query($query)))
            	echo "FAIL";
            $location = "teacher.php?name=".$_GET['admin'];
            //echo $location;
            header('Location: '.$location);
?>