<?php
            $mysqli=new mysqli("localhost","root","","users");
            $query = "UPDATE `db` SET `valid` = '1' WHERE `db`.`user` = '" + $_GET['user'] + "'";
            $mysqli->query($query);
            header('Location: teacher.php?name='.$_GET['admin']);
?>