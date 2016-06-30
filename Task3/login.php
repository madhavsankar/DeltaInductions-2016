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
</style>
</head>
<body> 
    <h2>LOGIN</h2>
    <p>Please Login to join us</p>
    <p>Login using email or username</p>
    <form method="post" action="http://localhost/result.php">  
  Username: <input type="text" name="username1">
  <span class="error"> </span>
  <br><br>
  E-mail: <input type="email" name="email1">
  <span class="error"> </span>
  <br><br>
  Password: <input type="password" name="password1" required>
  <span class="error"></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>
    
    </body>
</html>