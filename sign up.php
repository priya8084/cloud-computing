<html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="front.css">
    
</head>
  
<body bgcolor="#33FFFC">

    
  
<form action="regis.php"method = "POST">
  
  <?php include('header.php');?>
    <div class="bg">
    <div class="container">
      <h1>Registration</h1>
      <p> Create an account.</p>
      <hr>
      <label for = "Name"><b>NAME</b></label>&nbsp;
      <input type="text" name="name" required><br>
      <label for="Phone number"><b>PHONE NUMBER</b></label>&nbsp;
      <input type="text" name="phone" required><br>
      <label for="email"><b>EMAIL</b></label>
      <input type="text" name ="email" required><br>
      <label for="password"><b>PASSWORD</b></label>
      <input type="password" name="passw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      <br>
      <label for="confirm password"><b>CONFIRM PASSWORD</b></label>
      <input type="confirm password" name="confirmpassword" required><br>
      <p>By creating an account you are agree to our <a href="term.html" style="color:mediumseagreen">Terms & Conditions</a>.</p>
      <div class="clearfix">
        <button type="button" class="cancelbutton">Cancel</button>&nbsp;
        <button type="submit" class="signupbutton">Sign Up</button>

        
      </div>
    </div>
    </div>
</form>  
</form>
      
  

  
  </body>
  </html>