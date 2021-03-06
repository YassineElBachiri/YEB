<?php
error_reporting(0);

include "./inc/db.php";
include "./inc/form.php";

$sql = 'SELECT * FROM  user1';
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>YEB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="slider " id="slider">
            <div class="slider-overlay">
                <nav>
                    <div class="logo">YEB</div>
                   
                        <ul>
                            <li><a href="" >HOME</a></li>
                            <li><a href="#about" >ABOUT ME</a></li>
                            <li><a href="#services" >SERVICES</a></li>
                            <li><a href="#works" >WORKS</a></li>
                        </ul>
                    
                    <div class="nav-contact">
                        <a href="#contact">CONTACT ME</a></div>
                </nav>
                <div class="slider-content">
                    <div class="icons">
                        <i class="fa fa-lightbulb-o"></i>
                        <i class="fa fa-code"></i>
                        <i class="fa fa-key"></i>
                    </div>
                    <div class="text">Hi! I'm Web Developer</div>
                    <div class="cta-div">
                        <a href="login.php" class="btn1">Login</a>
                        <a href="register.php" class="btn1">Register</a>
                    </div>
                    <br><br>
                    <div class="social-networks">
                        <a href="" class="fa fa-facebook"></a>
                        <a href="" class="fa fa-twitter"></a>
                        <a href="https://www.instagram.com/y_a_s_s_i_n_e_el/" class="fa fa-instagram"></a>
                        <a href="https://www.linkedin.com/in/yassine-el-bachiri-020a88170/" class="fa fa-linkedin"></a>
                    </div>
                </div>
            </div>
    </div>
    <!----------------------ABOUT SECTION------------------------>
    <br><br>
    <section class="about" id="about">
        <div class="heading">
            <h2>About Me</h2>
        </div>
        <div class="content bg">
            <div class="about-img">
                <img src="img/bio 1.jpg">

            </div>
            <div class="contentBx">
                <h3>I'm a <strong>Developer.</strong></h3>
                <p>Hi! I'm Yassine El Bachiri,I'm from Morocco and Based in BANDIRMA, TURKEY. <br>I'm a student of computer engineering.I have some skills in web development since 2019.
                    <br>Over this period of time, I built  websites.</p>
            </div>
            <div class="cta-div">
                        <a href="cv.html" class="btn2">Check My CV</a>
            </div>
        </div>

    </section>
    <!--------------------------END ABOUT------------------------>
    <!---------------------SERVICES SECTION---------------------->
             <br><br>
             <section class="services" id="services">
                <div class="heading white">
                    <h2>Services</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="content">
                    <div class="servicesBx Bx1">
                        <img src="img/icon1.png">
                        <h2>Web Design</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, pariatur! Ipsum ducimus deserunt,
                             iure quia explicabo doloribus quisquam molestias.</p>    
                    </div>
                    <div class="servicesBx Bx2">
                        <img src="img/icon2.png">
                        <h2>Web Developement</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, pariatur! Ipsum ducimus deserunt,
                             iure quia explicabo doloribus quisquam molestias.</p>    
                    </div>
                    <div class="servicesBx Bx3">
                        <img src="img/icon3.png">
                        <h2>Android App</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, pariatur! Ipsum ducimus deserunt,
                             iure quia explicabo doloribus quisquam molestias.</p>    
                    </div>

    
                </div>
            </section>
            <br><br>
            <!--------------------------------MY WORKS-------------------------------->
            <section class="works" id="works">
                <div class="works-overloading">
               <div class="heading ">
                   <h2>MY WORKS</h2>
                   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
               </div>
            <div class="works-bg">
                <div class="carousel">
                  <div class="carousel-item carousel-item-visible">
                    <img src="./img/product1.jpg" alt="Project 1">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/product2.jpg" alt="Project 2">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/product3.jpg" alt="Project 3">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/product4.jpg" alt="Project 4">
                  </div>
              
                  <div class="carousel-actions">
                    <button id="carousel-button-prev" aria-label="Previous slide">???</button>
                    <button id="carousel-button-next" aria-label="Next slide">???</button>
                  </div>
                </div>
              </div>
              </div>
              </section>

              <!-----------------------------Search-------------------------->
              <section class="search-side">
                <div class="social-networks">
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-twitter"></a>
                    <a href="https://www.instagram.com/y_a_s_s_i_n_e_el/" class="fa fa-instagram"></a>
                    <a href="" class="fa fa-linkedin"></a>
                </div>
                  <div class="search">
                  <div class="icon"></div>
                  <div class="input">
                      <input  type="text" placeholder="Search" id="mysearch">
                  </div>
                  <span class="clear" onclick="document.getElementById('mysearch').value=''"></span>
                </div>
              </section>
            <!------------------------------Contact form------------------------>
            <div class="contact-container" id="contact">
                <div class="left-col">
                  <img src="https://images.pexels.com/photos/931018/pexels-photo-931018.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
                </div>
                <div class="right-col">
                    <h1>Contact us</h1>
                    <p>If you have idea in your mind text me</p>
                    <form id="contact-form"  action="index.php" method="POST">
                        <label for="name">Full name</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Your Full Name" >
                        <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Your Email Address" >
                        <label for="message">Message</label>
                    <textarea rows="6" placeholder="Your Message" id="message" name="message" ></textarea>
                    <button type="submit" id="submit" name="submit">Send</button>
                    
                  </form>
              </div>
                  
              </div>
              </div>
            




   <script src="js/index.js"></script>
</body>
</html>