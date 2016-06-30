<!DOCTYPE HTML>  
<html>
<head>
<style>
    h2{
                font-size:300%; 
                color:mediumpurple; 
                text-align:center;
            }        
    p{
                font-size:100%;
                color:purple;
                font-family:cursive;
                
            }
             body
            {
                background-size: cover;
                background-image:url("all-together-wallpapers_8010_1280x800.jpg");
                
            }
   
.error {color: #FF0000;}
</style>
</head>
<body> 
   

<?php
$usernameErr = $emailErr = $passwordErr = $phoneErr = $urlErr = "";
$username1 = $email1 = $password1 ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $username1 = test_input($_POST["username1"]);
  
    $email1 = test_input($_POST["email1"]);
  
    $password1 = md5(test_input($_POST["password1"]));
  
    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
     <?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'task3');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM register WHERE (username='$username1' OR email='$email1') AND password='$password1'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{$row=mysqli_fetch_assoc($result);
  echo "<h2>Your Profile</h2>";
echo "<p>Username : </p>".$row['username'];
echo "<br>";
echo "<p>E-mail : </p>".$row['email'];
echo "<br>";
echo "<p>Phone Number :</p>".$row['phone'];
echo "<br>";
echo "<p>Profile Picture :</p>"."<br>";
    $img=$row['url'];
print"<img src=\"$img\" width=\"15%\" height=\"15%\"\/>";
 echo "<br>";echo "<br>";echo "<br>";
  print"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"start.php\"><img src=\"19705375-logout-blue-circle-glossy-icon--Stock-Photo.jpg\" width=\"5%\" height=\"5%\"/></a>";
 
}

else
{
echo "<p>Invalid credentials</p>";
    print"&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"start.php\"><img src=\"Housing.png\" width=\"5%\" height=\"5%\"/></a>";
}



mysqli_close($conn);
?> 
   
    
    
   
    
    </body>
</html>