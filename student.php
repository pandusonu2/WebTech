<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <table id="logo_and_heading">
    <tr>
      <td> 
        <a href="index.html"> <img src="images/nitlogo.png" id="nitlogo"> </a>
      </td>
      <td>
        <table id="napbar" style="border-spacing: 2px;">
          <tr>
          </tr>
          <tr>
          <ul>
            <li><a href="login.html">Log Out</a></li>
          </ul>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    </tr>
    </table>
  	<h1>WELCOME <?php 
  		  echo $_GET['name']."</h1>"; 

        $mysqli = new mysqli("localhost","root","","users");
        $query = "SELECT * from db WHERE tors='0' AND user='".$_GET['name']."';";
        if($re=$mysqli->query($query)){
          while($row=$re->fetch_row()){
            print "<form action=\"update.php\" method=\"POST\">";
            print "<table align=\"center\" style=\"border:1px solid black;\">";
            print "<tr><td><b>Field</b></td><td><b>Value</b></td></tr>";
            print "<tr><td>First Name:</td><td>".$row[2]."</td></tr>";
            print "<tr><td>Last Name:</td><td>".$row[3]."</td></tr>";
            print "<tr><td>Date of Birth:</td><td>".$row[26]."<td></tr>";
            print "<tr><td>Gender:</td><td>".$row[4]."</td></tr>";
            print "<tr><td>Department:</td><td>".$row[5]."</td></tr>";
            print "<tr><td>Roll Number:</td><td>".$row[6]."</td></tr>";
            print "<tr><td>Email:</td><td>".$row[7]."</td></tr>";
            print "<tr><td>Address:</td><td>".$row[8]."</td></tr>";
            print "<tr><td>10th Insti:</td><td><input type=\"text\" name=\"tenInsti\" value=\"".$row[9]."\"></td></tr>";
            print "<tr><td>10th Percent:</td><td><input type=\"text\" name=\"tenPer\" value=\"".$row[10]."\"></td></tr>";
            print "<tr><td>10th Year:</td><td><input type=\"text\" name=\"tenYear\" value=\"".$row[11]."\"></td></tr>";
            print "<tr><td>12th Insti:</td><td><input type=\"text\" name=\"twelveInsti\" value=\"".$row[12]."\"></td></tr>";
            print "<tr><td>12th Percent:</td><td><input type=\"text\" name=\"twelvePer\" value=\"".$row[13]."\"></td></tr>";
            print "<tr><td>12th Year:</td><td><input type=\"text\" name=\"twelveYear\" value=\"".$row[14]."\"></td></tr>";
            print "<tr><td>B Tech Insti:</td><td><input type=\"text\" name=\"btechInsti\" value=\"".$row[15]."\"></td></tr>";
            print "<tr><td>B Tech Percent:</td><td><input type=\"text\" name=\"btechPer\" value=\"".$row[16]."\"></td></tr>";
            print "<tr><td>B Tech Year:</td><td><input type=\"text\" name=\"btechYear\" value=\"".$row[17]."\"></td></tr>";
            print "<tr><td>M Tech Insti:</td><td><input type=\"text\" name=\"mtechInsti\" value=\"".$row[18]."\"></td></tr>";
            print "<tr><td>M Tech Percent:</td><td><input type=\"text\" name=\"mtechPer\" value=\"".$row[19]."\"></td></tr>";
            print "<tr><td>M Tech Year:</td><td><input type=\"text\" name=\"mtechYear\" value=\"".$row[20]."\"></td></tr>";
            print "<tr><td></td><td><input align=\"center\" type=\"submit\" id=\"btn\" value=\"Update\"/></td></tr>";
            print "</table>";
            print "<input type=\"text\" name=\"tors\" value=\"0\" style=\"display:none\"/>";
            print "<input type=\"text\" name=\"user\" value=\"".$row[0]."\" style=\"display:none\"/>";
            print "</form>";
          }
        }
  		?>
  </body>
</html>
