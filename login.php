
<html>
  
<?php include('config.php');

if (isset($_POST['btnlogin'])) {
    if(isset($_POST["remember_me"])){
        setcookie("email",$_POST['email'], time()+ 60*60*24,"/");
        $_COOKIE["email"]=$_POST['email'];
    }
    else {
        setcookie("email",null,-1,"/");
    }

    $error = "";
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember_me = $_POST['remember_me'];

    if (empty($email)) {
        $error = "Please enter your email";
    }
    if (empty($password)) {
        $error = "Please enter your password";
    }

    if (empty($error)) {
        
       $query = "Select id,name,email,utype from users where email = '$email' AND password = '$password'";
        $result = $conn->query($query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);

            
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_type'] = $row['utype'];

            //create cookie
            if(!empty($remember_me)){
                $userArr['user_id'] = $row['id'];
                $userArr['user_name'] = $row['name'];
                $userArr['user_type'] = $row['utype'];
                setcookie('remember_me', '', time() - $expire);
                setcookie('remember_me', json_encode($userArr), time() + $cookie_time);
            }
            header('location:myaccount.php');
        }else{
            header('location:login.php?reg=failed');
        }
    }
}
?> 
<!DOCTYPE HTML>

<html>
    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >        
        
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
            function checkform() {
                var email = document.getElementById('email');
                if (email.value.trim() == "") {
                    alert('Please enter your email');
                    email.focus();
                    return false;
                }
                var password = document.getElementById('password');
                if (password.value.trim() == "") {
                    alert('Please enter your password');
                    password.focus();
                    return false;
                }
            }
        </script>
    </head>
<body bgcolor="#33FFFC">
    
        <table cellspacing="0" cellpadding="0" align="center" border="0" class="body_content">    
            <tr>
                <td width="950" cellspacing="0" cellpadding="0">
                    <?php include('header.php'); ?>
                </td>
            </tr>
            <tr>
                <td width="950"  height="500" valign="middle" style="padding-left: 10px;padding-right: 10px;">
                    <form action="greet.php" method="post">
                        <table width="100%" border="0" cellpadding="5" cellspacing="5">
                            
                            <tr>                                
                            <td><img src="pic/book5.jpg"></td>
                            
                                <td align="center">

                                    <fieldset class="fieldset" style="width: 300px;">

                                        <legend class="legand1">Login</legend>
                                        <table width="100%">
                                            <?php
                                            if(!empty($_GET['reg']) && $_GET['reg'] == "failed"){
                                                echo '<tr><td colspan="4" align="center"><p style="color:red;">Your email and password are wrong.</p><td></tr>';
                                            }
                                        ?>                                                
                                            <tr><td height="10"></td></tr>
                                            <tr>
                                                <td class="bold_matter">
                                                    Email
                                                </td>
                                                <td>
                                                    <input type="text" name="email" id="email" class="inputbox" style="width: 200px" placeholder="Email" value="<?php if (isset($_COOKIE["email"])): echo $_COOKIE["email"]; endif ?>" >
                                                </td>

                                            </tr>
                                            <tr><td height="10"></td></tr>
                                            <tr>
                                                <td class="bold_matter">
                                                    Password :
                                                </td>
                                                <td>
                                                    <input type="password" name="password"  id="password" class="inputbox" style="width: 200px" placeholder="Password">
                                                </td>
                                            </tr>
                                            <tr>                                               
                                                <td colspan="3">
                                                    <input type="checkbox" name="remember_me"  id="remember_me" <?php if (isset($_COOKIE["email"])): echo "checked"; endif ?>/>
                                                    &nbsp;Remember Me
                                                </td>
                                            </tr>

                                            <tr><td>&nbsp;</td></tr>
                                            <tr>
                                                <td>
                                                 <a href="forget-password.php" class="link">Forget Password</a>   
                                                </td>
                                                <td align="right">                              
                                                    <input type="submit" name="btnlogin" id="btnlogin" value="Login" onclick="return checkform();" class="text_bor"/> 
                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </td>
                                
                            </tr>

                        </table>                    
                    </form>
                </td>
            </tr>
            
        </table>
    </body>
</html>
