<?php
error_reporting(0);

include 'inc/db.php';

session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM user2 WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    if(!$result -> num_rows > 0){            
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email or Password is Wrong.')</script>";
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
    <title>Sign In</title>
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
                
                <form id="Sign-form" action="Sign.php" method="POST">
                    <h1>Sign In</h1>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email Address" value="<?php echo $email; ?>" required>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Your Password" value="<?php echo $_POST['password']; ?>" required>
                <button type="submit" id="submit" name="submit">LOGIN</button>
                <br><br>
                    <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
                
              </form>
          </div>
            </div>
    </div>

    
</body>
</html>