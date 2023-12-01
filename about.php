<?php 
include './components/connection.php'; 
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
if(isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}
?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Green Coffee - about us page</title>
</head>
<body>
    
<?php  include './components/header.php'; ?>
<div class="main">
    <div class="banner">
        <h1>About us</h1>
    </div>
    <div class="title2">
        <a href="home.php">Home</a><span>/ About</span>
    </div>
    <div class="about-categroy">
        <div class="box">
            <img src="./img/3.webp" alt="">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon green</h1>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="./img/2.webp" alt="">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Tea</h1>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="./img/about.png" alt="">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Tea</h1>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="./img/1.webp" alt="">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon green</h1>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
        </div>
    </div>
    <section class="services">
        <div class="title">
            <img src="./img/download.png" alt="" class="logo">
            <h1>Why choose us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quas voluptatibus dicta, officia ipsam aut.</p>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="./img/icon2.png" alt="">
                <div class="detail">
                    <h3>great saving</h3>
                    <p>save big every order</p>
                </div>
            </div>
            <div class="box">
                <img src="./img/icon1.png" alt="">
                <div class="detail">
                    <h3>24*7 support</h3>
                    <p>one-on-one support</p>
                </div>
            </div>
            <div class="box">
                <img src="./img/icon0.png" alt="">
                <div class="detail">
                    <h3>gift vouchers</h3>
                    <p>vouchers on every festivals</p>
                </div>
            </div>
            <div class="box">
                <img src="./img/icon.png" alt="">
                <div class="detail">
                    <h3>worldwide delivery</h3>
                    <p>dropship worldwide</p>
                </div>
            </div>
        </div>
    </section>
    <div class="about">
        <div class="row">
            <div class="img-box">
                <img src="./img/3.png" alt="">
            </div>
            <div class="detail">
                <h1>visit us our beautiful showroom!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim explicabo nemo quisquam laborum sed voluptas similique recusandae iure, alias distinctio! Aut dignissimos rerum autem quasi magnam consectetur repellendus nostrum incidunt.</p>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
        </div>
    </div>
    <div class="testimonial-container">
        <div class="title">
            <img src="./img/download.png" class="logo" alt="">
            <h1>what people say about us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eligendi possimus a quidem eum.</p>
        </div>
            <div class="container">
                <div class="testimonial-item active">
                    <img src="./img/01.jpg" alt="">
                    <h1>Asifa</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim explicabo nemo quisquam laborum sed voluptas similique recusandae iure, alias distinctio! Aut dignissimos rerum autem quasi.</p>
                </div>
                <!-- <div class="testimonial-item active">
                    <img src="./img/02.jpg" alt="">
                    <h1>Arslan</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim explicabo nemo quisquam laborum sed voluptas similique recusandae iure, alias distinctio! Aut dignissimos rerum autem quasi.</p>
                </div>
                <div class="testimonial-item active">
                    <img src="./img/03.jpg" alt="">
                    <h1>Soniya</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim explicabo nemo quisquam laborum sed voluptas similique recusandae iure, alias distinctio! Aut dignissimos rerum autem quasi.</p>
                </div> -->
                <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
            </div>
    </div>
    <?php include 'components/footer.php'?>
</div>
<script src="http://cdnjs.Cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="script.js"></script>
<?php  include './components/alert.php'; ?>
</body>
</html>