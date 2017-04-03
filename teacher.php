<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!--link rel="stylesheet" type="text/css" href="css/style.css"-->
    <style>
      table,td{
        border:1px solid black;
      }
      body{
          background-image: url("images/bg_image.jpg");
          background-size: cover;
          background-repeat: no-repeat;
      }
    </style>
  </head>
  <body>
  	<h1>WELCOME <?php 
          $mysqli=new mysqli("localhost","root","","users");
          echo $_GET['name'];
          echo "</h1></br></br>";
          echo "<table>";
          echo "<tr><td><b>First Name</b></td> <td><b>Last Name</b></td> <td><b>Activate</b></td></tr>";
          $query="SELECT * FROM db WHERE tors='0 'and valid='0';";
          if($re=$mysqli->query($query)){
            while($row=$re->fetch_row()){
              print "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>";
              print "<a href=\"activate.php?admin=".$_GET['name']. "&user=".$row[0]."\">Activate</a>";
              //print "<input type=\"button\" value=\"activate\" onclick=\"activate(".$row[0].")\" />";
              print "</td></tr>";
            }
          }else echo "FAIL";
          print "</table>";
          if($_GET['name']=='root'){
            echo "</h1></br></br>";
            echo "<table>";
            echo "<tr><td><b>First Name</b></td> <td><b>Last Name</b></td> <td><b>Activate</b></td></tr>";
            $query="SELECT user,pass from db where tors='1' and valid='0';";
            if($re=$mysqli->query($query)){
              while($row=$re->fetch_row()){
                print "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>";
                print "<a href=\"activate.php?admin=".$_GET['name']. "&user=".$row[0]."\">Activate</a>";
                //print "<input type=\"button\" value=\"activate\" onclick=\"activate(".$row[0].")\" />";
                print "</td></tr>";
              }
            }
            print "</table>";
          }
  		?>
  </body>
</html>
