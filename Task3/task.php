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
    input:invalid {
  border: 1px solid red;
        background-color: #FDD;
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
$username = $email = $password = $phone =  $url = "";

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

<h2>One step away from becoming a family!</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="http://localhost/registers.php">  
  Username: <input type="text" name="username" required>
  <span class="error">* </span>
  <br><br>
   
  
  E-mail: <input type="email" name="email" required>
  <span class="error">* </span>
  <br><br>
  Password: <input type="password" name="password" required>
  <span class="error">*</span>
  <br><br>
  Phone: <input type="number" name="phone">
    
  <br><br>
    Photo url: <input type="text" name="url">
    
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>