<?php
   include('../action.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In Form</title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">    
</head>
<?php
$rand = rand(9999,1000);
if(isset($_REQUEST['login']))
{
    $name = $_REQUEST['name'];
    $psw = $_REQUEST['psw'];
    $captcha = $_REQUEST['captcha'];
    $captcharandom = $_REQUEST['captcha-rand'];
    if($captcha!=$captcharandom)
     {?>
      <script type="text/javascript">
        alert("Invalid captcha value");
      </script>
<?php
     }
    else
    {
        $select_query = mysqli_query($con, "select * from u_info where name='$name' and psw='$psw'" );
        $result = mysqli_num_rows($select_query);
        if($result>0)
        {?>
          <script type=@text/javascript">
            alert("Login successfully");
        </script>
<?php
        }
        else
        {?>
        <script type="text/javascript">
            alert("Invalid username and password");
        </script>
<?php
        }   
    }
}
?>
<body>

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">LOG IN NOW</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="psw" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-input" name="captcha" id="captcha" placeholder="Enter Captcha"/>
                            <span toggle="#captcha" class="text"></span>
                            <input type="hidden" name="captcha-rand" value="<?php echo $rand; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="captcha-code" ><b>Captcha Code</label>
                            <div class="captcha" style= "background:lightblue; text-align:center; font-size: 24px; font-weight: 700;"><?php echo $rand; ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        <input type="submit" name="login" id="submit" class="form-submit" value="Login Now"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Not have an account ? <a href="signup.php" class="loginhere-link">Sign Up</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>