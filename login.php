
<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<html lang="en">

   <head>
      <title>login</title>
   </head>
   <?php
    session_start();
   ?>
   <link rel="stylesheet" type="text/css" href="style.css">
   <body > 
   <center><h1><font size="20">ClassConnect</font></h1>  </center> 
   <h1>Sign In</h1>
      <form method = "POST" action = "dbConnect.php">
        <input type="text" name="user" placeholder="username"><br>
        <input type="password" name="pwd" placeholder="password"><br>
        <button type = "submit">LOG IN</button><br>

        
      </form>
   <h1>Sign Up</h1>
      <form method = "POST" action = "SignUp.php">
        
        <button type = "submit">SIGN UP</button><br>

      </form>
   </body>
</html>
