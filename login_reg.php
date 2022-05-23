<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Registration</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
</head>
<!-- <body>
    <form action="" method=post>
        <h2>Login</h2>
        Username: <input type="text" name="username1"><br>
        Password: <input type="text" name="password1"><br><br>
        <button type="submit">Login</button>
        <button type="reset">Clear</button>
    </form>                 
    <form action="" method="post">
        <h2>Register</h2>
        Name:<input type="text" name="name"><br>
        Username: <input type="text" name="username" ><br>
        Password: <input type="text" name="password"><br>
        <button type="submit">Register</button>
        <button type="reset">Clear</button>
    </form>
    </body> -->

<body>
<?php 
    require 'dbconfig.php';
    session_start(); 
    ?>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="image.jpg" alt="">
            </div>
            <div class="back">
                <img class="backImg" src="image.jpg" alt="">
            </div>
        </div>
        <form action="" method = "post">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input name= "username1" type="text" placeholder = "Enter your username" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input name="password1" type="password" placeholder = "Enter your password" required>
                        </div>
                        <div class="text"><a href="#">Forgot Password?</a></div>
                        <div class="button input-box">
                            <input type="submit" value = "Submit">
                        </div>
                        
                        <div class="text login-text">Don't have an account? <label  for="flip" >Signup now</label></div>
                    </div>
                </div>
            </form>
            <?php      
        if(isset($_POST['username1'])&&isset($_POST['password1'])){
            $username1 = $_POST['username1']; 
            $password1 = $_POST['password1'];
            
            $fetchqry = "select * from login_reg where username='$username1'"; 
            $result = mysqli_query($con,$fetchqry);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
            if($password1 == $row['password']){
                header("Location: showpage.php");
            }   
        }
                    
                  
?>  
            <form action="" method = "post">
                <div class="signup-form">
                    <div class="title">Signup</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input name="name" type="text" placeholder = "Enter your name" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input name="username" type="text" placeholder = "Enter your username" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input name="password" type="password" placeholder = "Enter your password" required>
                        </div>
                        <div class="button input-box">
                            <input type="Submit" value = "Submit">
                        </div>
                        <div class="text signup-text">Already have an account? <label for="flip">Login now</label></div>
                    </div>
                </div>
            </div>
        </form>
        <?php      
        if(isset($_POST['username'])&&isset($_POST['name'])&&isset($_POST['password'])){
            $username = $_POST['username']; 
            $password = $_POST['password'];
            $name = $_POST['name'];
            $fetchqry = "insert into login_reg(`name`, `username`, `password`) values('$name','$username','$password');"; 
            $result = mysqli_query($con,$fetchqry);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
               
        }
                    
                  
?>
    </div>
    </body>
</html>