<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!--link rel="stylesheet" type="text/css" href="css/style.css"-->
  </head>
  <body>
  	<h1>WELCOME <?php 
  		  echo $_GET['name']."</h1>"; 
        $mysqli = new mysqli("localhost","root","","users");
        $query = "SELECT * from db WHERE tors='0' AND user='".$_GET['name']."';";
        if($re=$mysqli->query($query)){
          while($row=$re->fetch_row()){
            print "<table>";
            print "<tr><td><b>Field</b></td><td><b>Value</b></td></tr>";
            print "<tr><td>First Name:</td><td>".$row[2]."</td></tr>";
            print "<tr><td>Last Name:</td><td>".$row[3]."</td></tr>";
            print "<tr><td>Gender:</td><td>".$row[4]."</td></tr>";
            print "<tr><td>Department:</td><td>".$row[5]."</td></tr>";
            print "<tr><td>Roll Number:</td><td>".$row[6]."</td></tr>";
            print "<tr><td>Email:</td><td>".$row[7]."</td></tr>";
            print "<tr><td>Address:</td><td>".$row[8]."</td></tr>";
            print "<tr><td>10th Insti:</td><td>".$row[9]."</td></tr>";
            print "<tr><td>10th Percent:</td><td>".$row[10]."</td></tr>";
            print "<tr><td>10th Year:</td><td>".$row[11]."</td></tr>";
            print "<tr><td>12th Insti:</td><td>".$row[12]."</td></tr>";
            print "<tr><td>12th Percent:</td><td>".$row[13]."</td></tr>";
            print "<tr><td>12th Year:</td><td>".$row[14]."</td></tr>";
            print "<tr><td>B Tech Insti:</td><td>".$row[15]."</td></tr>";
            print "<tr><td>B Tech Percent:</td><td>".$row[16]."</td></tr>";
            print "<tr><td>B Tech Year:</td><td>".$row[17]."</td></tr>";
            print "<tr><td>M Tech Insti:</td><td>".$row[18]."</td></tr>";
            print "<tr><td>M Tech Percent:</td><td>".$row[19]."</td></tr>";
            print "<tr><td>M Tech Year:</td><td>".$row[20]."</td></tr>";
            print "</table>";
          }
        }
  		?>
  </body>
</html>
