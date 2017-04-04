<?php
	$mysqli = new mysqli("localhost","root","","users");
	$query = "UPDATE db SET tenInsti='".$_POST['tenInsti']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET tenPer='".$_POST['tenPer']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET tenYear='".$_POST['tenYear']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET twelveInsti='".$_POST['twelveInsti']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET twelvePer='".$_POST['twelvePer']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET twelveYear='".$_POST['twelveYear']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET btechInsti='".$_POST['btechInsti']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET btechPer='".$_POST['btechPer']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET btechYear='".$_POST['btechYear']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET mtechInsti='".$_POST['mtechInsti']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET mtechPer='".$_POST['mtechPer']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET mtechYear='".$_POST['mtechYear']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET phdInsti='".$_POST['phdInsti']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET phdPer='".$_POST['phdPer']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
	$query = "UPDATE db SET phdYear='".$_POST['phdYear']."' WHERE user='".$_POST['user']."';";
    if(!($re=$mysqli->query($query)))
    	echo "FAIL";
            if(!($re=$mysqli->query($query)))
            	echo "FAIL";
	$loca = "student.php?name=".$_POST['user'];
	if($_POST['tors']=="1")
		$loca = "teacher.php?name=".$_POST['user'];
	header('Location: '.$loca);
?>