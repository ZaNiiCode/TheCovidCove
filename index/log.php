<?php 
    session_start();
?>

<html lang="en">
    <head>
        <meta  charset="utf-8">
        <meta name="description" content="user login and resgistration fully functional">
        <meta name="author" content="group 14 2020">
        <title> Login And Registration </title>
        <!-- own style for the page-->
        <link href="style2.css" rel="stylesheet">
        <!--fontawesome -->
        <script src="https://kit.fontawesome.com/e0c7dda93e.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="images/logo.favicon.jpg" type="image/jpg">
    </head>

    <body>
        
        <!-- LOG IN FORM-->
        <div class="container">
            <form action="includes/login.inc.php"  class="form" method="POST">
                <div class="header">
                    <h2 class="myHeader">Login</h2>
                </div>
                <div class="form-control  " >
                 <label>Username</label>
                <input type="text" placeholder="username" name="mailuid" >
                </div>
                <div class="form-control  " >
                <label>Password</label>
                <input type="password" placeholder="Password" name="pwd">
                </div>
                 <button type="submit" name="login-submit"> Login</button>   
                <p class="message">Not Registered? <a href="#">Register now</a></p>
            </form>
            
            
            <!-- SIGN UP FORM -->
            <form action="includes/signup.inc.php" style="display: none" class="form" method="POST">
                <div class="header">
                    <h2 class="myHeader">Create Account</h2>
                </div>
                <?php 
                    if (isset($_GET['error'])){
                        
                        if ($_GET['error'] == "emptyfields"){
                            echo '<p style="color: red; font-family: inherit; font-size: 12px; text-align: center"> Fill in all fields!</p>';
                        }
                        else if ($_GET['error'] == "invalidmailuid"){
                            echo '<p style="color: red; font-family: inherit; font-size: 12px; text-align: center">Invalid email!</p>';
                        }
                        else if ($_GET['error'] == "invaliduid"){
                            echo '<p style="color: red; font-family: inherit; font-size: 12px; text-align: center">Invalid Username!</p>';
                        }
                        else if ($_GET['error'] == "passwordcheck"){
                            echo '<p style="color: red; font-family: inherit; font-size: 12px; text-align: center">Passwords does not match!</p>';
                        }
                        else if ($_GET['error'] == "usertaken"){
                            echo '<p style="color: red; font-family: inherit; font-size: 12px; text-align: center">Username already in use!</p>';
                        }
                        
                    }
                    
                
                ?>
               
                <div class="form-control  " >
                    <label>Username</label>
                     <input type="text" placeholder="username"  name="uid" >   
                </div>
                <div class="form-control ">
                    <label>Email </label>
                     <input type="email" placeholder="myUser@gmail.com"  name="mail" >     
                </div>
                <div class="form-control">
                    <label>Password</label>
                     <input type="password" placeholder="password" name="pwd" >
                     
                </div>
                <div class="form-control">
                    <label>Confirm Password</label>
                     <input type="password" placeholder="confirm password" name="pwd-repeat"  >
                    
                </div>
                <button type="submit" name="signup-submit">Create </button>
                <p class="message">Already Registered? <a href ="#">Login</a></p>
            </form>

        
        </div>
        
    </body>
    
    
    <footer>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
        <script src="js/toggleLG.js"></script>
    
    </footer>
    
</html>
