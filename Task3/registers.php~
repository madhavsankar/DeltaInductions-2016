<!DOCTYPE HTML>  
<html>
<head>
<style>
    h1{
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
    input:invalid {
  border: 1px solid red;
}

input:valid {
  border: 1px solid green;
}
      
.error {color: #FF0000;}
</style>
</head>
<body> 
   

<?php
$usernameErr = $emailErr = $passwordErr = $phoneErr = $urlErr = "";
$username = $email = $password = $phone =  $url = $gender="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $username = test_input($_POST["username"]);
 
    $email = test_input($_POST["email"]);
  
    $password = md5(test_input($_POST["password"]));
  
    $phone = test_input($_POST["phone"]);
  
    $url = test_input($_POST["url"]);
  
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
$sql = "SELECT * FROM register WHERE (username='$username' OR email='$email') AND password='$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{$row=mysqli_fetch_assoc($result);
  echo "<h1>LOGIN</h1>"."<p>Already Registered! Please Login to join us</p>"."<p>Login using email or username</p>";
}
    else
    {
$sql = "INSERT INTO register (username, password, email,phone,url)
VALUES ('$username', '$password', '$email','$phone','$url')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>LOGIN</h1>"."<p>Registration Successful! Please Login to join us</p>"."<p>Login using email or username</p>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    }

mysqli_close($conn);
?> 
    
    
    <form method="post" action="http://localhost/result.php">  
  Username: <input type="text" name="username1">
  <span class="error"> <?php echo $usernameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email1">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="password1">
  <span class="error"><?php echo $passwordErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>
    
    </body>
</html>