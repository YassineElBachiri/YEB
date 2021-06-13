<?php
error_reporting(0);
session_start();

include 'inc/db.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if($password === $cpassword ) {
        $sql = "SELECT * FROM user2 WHERE email='$email'";
        $result = mysqli_query($conn,$sql);
            if(!$result -> num_rows > 0){            
                $sql = "INSERT INTO user2 (username, email, password)
                VALUES ('$username','$email','$password')";
                $result = mysqli_query($conn,$sql);
                if(!$result) {
                    echo "<script>alert('Wow! User Registration Completed.')</script>";
                    $username = "";
                    $email = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                    header("Location: login.php");
                } else {
                    echo "<script>alert('Woops! Email Already Exists.')</script>";
                }
            }else {
                    echo "<script>alert('Woops! Something Wrong.')</script>"; 
            }

        }else {
            echo "<script>alert('Password Not Matched.')</script>";
        }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Sign.css">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="slider " id="slider">
        <div class="slider-overlay">
            <nav>
                <div class="logo">YEB</div>
               
                <div class="social-networks">
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-twitter"></a>
                    <a href="https://www.instagram.com/y_a_s_s_i_n_e_el/" class="fa fa-instagram"></a>
                    <a href="https://www.linkedin.com/in/yassine-el-bachiri-020a88170/" class="fa fa-linkedin"></a>
                </div>
            </nav>
            <div class="Sign-col">
                
                <form id="register-form" action="" method="POST">
                    <h1>Register</h1>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Your Username" value="<?php echo $username; ?>" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email Address" value="<?php echo $email; ?>" required>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Your Password" value="<?php echo $_POST['password']; ?>" required>
                    <label for="password">Confirm Password</label>
                    <input type="password" id="password" name="cpassword" placeholder="Confirm Your Password" value="<?php echo $_POST['cpassword']; ?>" required>
                <button type="submit" id="submit" name="submit">LOGIN</button>
                <br><br>
                    <p class="login-register-text"> Have an account? <a href="login.php">Login Here</a></p>
                
              </form>
          </div>
             </div>
    </div>

    
</body>
</html>