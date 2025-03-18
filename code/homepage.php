<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
</head>
<body>
<?php include 'top-bar.php';
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];


    $sql = "INSERT INTO subscribers (email) VALUES ('$email')";


    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thank you for subscribing!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
    <div class="menu-page">
        <ul>
            <li><a href="homepage.php" style="color:#ED553B">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="bookpage.php">Books</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    
    </div>
<div class="slider">
    <div class="slide">
        <h3 style="font-size: 50px; display:block; width:600px; margin-left:250px; text-shadow: 3px 7px #d1d0d0;">EXPAND YOUR KNOWLEDGE</h3>
        <h4 style="position:relative; font-family:Georgia, 'Times New Roman', Times, serif; font-size:30px; margin-left:40px; margin-top: 50px;">“The only source of knowledge is experience.” </h4>
        <h4 style="margin-left:60px;"> - Albert Einstein</h4>
        <button class="primary-btn"> Read More</button>
        <img src="../img/books.png" alt="Slide 1 Image" style="margin-left: 90%;margin-top:-360px; margin-bottom:-190px;">
        <img src="../img/books1.png" alt="Slide 2 Image" style="margin-left: 70%;margin-top:-200px;margin-bottom:-50px;">
        <img src="../img/books2.png" alt="Slide 3 Image" style="margin-left: 80%;">
        <img src="../img/books4.png" alt="Slide 4 Image" style="margin-left:70%; margin-top:-70px">
        <img src="../img/books5.png" alt="Slide 5 Image" style="margin-left:90%; margin-top:-190px">     
    </div>
    <div class="slide">
        <h3 style="font-size: 50px; display:block; width:600px; margin-left:250px; text-shadow: 3px 7px #d1d0d0;">EXPAND YOUR KNOWLEDGE</h3>
        <h4 style="position:relative; font-family:Georgia, 'Times New Roman', Times, serif; font-size:30px; margin-left:40px; margin-top: 50px;">“The only source of knowledge is experience.” </h4>
        <h4 style="margin-left:60px;"> - Albert Einstein</h4>
        <button class="primary-btn"> Explore  Now! </button>
            <div style="position: absolute; left: 55%; top: 150px;">
                <img src="../img/books.png" alt="Slide 1 Image" style="width:170px;">
            </div>
            <div style="position: absolute; left: 70%; top: 50px;">
                <img src="../img/books2.png" alt="Slide 1 Image" style="width:170px;">
            </div>
            <div style="position: absolute; left: 85%; top: 150px;">
                <img src="../img/books1.png" alt="Slide 2 Image" style="width:170px;">
            </div>
    </div>
    <div class="slide" style="position: relative; text-align: right;">
        <h3 style="text-align:right; font-size: 50px; display:block; text-shadow: 3px 7px #d1d0d0;">EXPAND YOUR KNOWLEDGE</h3>
        <h4 style="position:relative; font-family:Georgia, 'Times New Roman', Times, serif; font-size:30px; margin-right:40px; margin-top: 50px; text-align: right;">Find Your Entertainment on Our e-Book Website </h4>
        <h4 style="margin-right:40px; text-align: right;"> Start Exploring Today</h4>
        <button class="primary-btn"> Read More</button>
            <div style="position: absolute; left: 2%; top: 150px;">
                <img src="../img/books.png" alt="Slide 1 Image" style="width:170px;">
            </div>
            <div style="position: absolute; left: 8%; top: 100px;">
                <img src="../img/books2.png" alt="Slide 1 Image" style="width:170px;">
            </div>
            <div style="position: absolute; left: 15%; top: 50px;">
                <img src="../img/books1.png" alt="Slide 2 Image" style="width:170px;">  
            </div>
            <div style="position: absolute; left: 24%; top: 100px;">
                <img src="../img/books4.png" alt="Slide 1 Image" style="width:170px;">
            </div>
            <div style="position: absolute; left: 33%; top: 150px;">
                <img src="../img/books5.png" alt="Slide 1 Image" style="width:170px;">
            </div>
    </div>
</div>


<div>
    <p style="font-size: 20px; color:#ED553B;font-family:monospace; margin-left:50px; margin-top:80px;">- Categories</p>
    <p style="color:#0e1687; font-size: 40px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-left: 40px;">Explore Our Top Categories</p>
    <button class="btn-slide" style="margin-left:40px;" onclick="prevCategory()"><img src="../icon/arrow.png"></button>
    <button class="btn-slide"style="margin-left:10px;" onclick="nextCategory()"><img src="../icon/right-arrow (1).png"></button>
        <div class="categories">
            <div class="category">
                <a href="#">
                    <img src="../img/mine.png">
                    <h2>Images1</h2>
                    <p>This image was just a content for the website</p>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <img src="../img/mine.png">
                    <h2>Images2</h2>
                    <p>This image was just a content for the website</p>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <img src="../img/mine.png">
                    <h2>Images3</h2>
                    <p>This image was just a content for the website</p>
                </a>
            </div>
            <!-- the other hidden categories -->
            <div class="category">
                <a href="#">
                    <img src="../img/mine.png">
                    <h2>Images4</h2>
                    <p>This image was just a content for the website</p>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <img src="../img/mine.png">
                    <h2>Images5</h2>
                    <p>This image was just a content for the website</p>
                </a>
            </div>
            <div class="category">
                <a href="#">
                    <img src="../img/mine.png">
                    <h2>Images6</h2>
                    <p>This image was just a content for the website</p>
                </a>
            </div>
        </div>
</div>

<div class="center-linetext">
    <hr>
    <p>New Release Books</p>
</div>

<div class="wrapper">
    <div class="book-shape">
        <a href="page1.html" class="card-link">
            <div class="card">
                <div class="poster">
                    <img src="../img/book6.png" alt="Book 1">
                </div>
                <div class="details">
                    <h4>Book 1 Title</h4>
                        <ul>
                            <li>Physicological</li>
                            <li>Business</li>
                            <li>Genre3</li>
                            <li>Genre3</li>
                            <li>Genre3</li>
                            <li>Genre3</li>
                        </ul>
                    <p>Rating: 4.5</p>
                    <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p>Characters: Character1, Character2</p>
                </div>
            </div>
            <h2>Book Title</h2>
            <p>Author</p>
            <h3>Status</h3>
        </a>
    </div>
    <div class="book-shape">
        <a href="page1.html" class="card-link">
            <div class="card">
                <div class="poster">
                    <img src="../img/books2.png" alt="Book 2">
                </div>
                <div class="details">
                    <h4>Book 2 Title</h4>
                        <ul>
                            <li>Physicological</li>
                            <li>Genre2</li>
                            <li>Genre3</li>
                        </ul>
                    <p>Rating: 4.0</p>
                    <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p>Characters: Character3, Character4</p>
                </div>
            </div>
            <h2>Book Title</h2>
            <p>Author</p>
            <h3>Status</h3>
        </a>
    </div>
    <div class="book-shape">
        <a href="page1.html" class="card-link">
            <div class="card">
                <div class="poster">
                    <img src="../img/books1.png" alt="Book 2">
                </div>
                <div class="details">
                    <h4>Book 3 Title</h4>
                        <ul>
                            <li>Physicological</li>
                            <li>Genre2</li>
                            <li>Genre3</li>
                        </ul>
                    <p>Rating: 4.0</p>
                    <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p>Characters: Character3, Character4</p>
                </div>
            </div>
            <h2>Book Title</h2>
            <p>Author</p>
            <h3>Status</h3>
        </a>
    </div>
    <div class="book-shape">
        <a href="page1.html" class="card-link">
            <div class="card">
                <div class="poster">
                    <img src="../img/books4.png" alt="Book 2">
                </div>
                <div class="details">
                    <h4>Book 4 Title</h4>
                        <ul>
                            <li>Physicological</li>
                            <li>Genre2</li>
                            <li>Genre3</li>
                        </ul>
                    <p>Rating: 4.0</p>
                    <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p>Characters: Character3, Character4</p>
                </div>
            </div>
            <h2>Book Title</h2>
            <p>Author</p>
            <h3>Status</h3>
        </a>
    </div>
    <div class="book-shape">
        <a href="page1.html" class="card-link">
            <div class="card">
                <div class="poster">
                    <img src="../img/books5.png" alt="Book 2">
                </div>
                <div class="details">
                    <h4>Book 4 Title</h4>
                        <ul>
                            <li>Physicological</li>
                            <li>Genre2</li>
                            <li>Genre3</li>
                        </ul>
                    <p>Rating: 4.0</p>
                    <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p>Characters: Character3, Character4</p>
                </div>
            </div>
            <h2>Book Title</h2>
            <p>Author</p>
            <h3>Status</h3>
        </a>
    </div>

</div>
    <a href="#"class="view-more"> View more details >></a> 
<div class="center-linetext">
    <hr>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fcebea" fill-opacity="1" d="M0,192L80,176C160,160,320,128,480,128C640,128,800,160,960,170.7C1120,181,1280,171,1360,165.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
<div class="addvertising">
    <div>
        <h1>Up to 50% off now! Don't miss such a deal! </h1>
        <p> For exclusive books!</p>
        <div class="grid-container">
            <div class="time-count days">000</div>
            <div class="time-count hours">00</div>
            <div class="time-count minutes">00</div>  
            <div class="time-count seconds">00</div>
            <div class="timeless">Days</div>
            <div class="timeless">Hour</div>  
            <div class="timeless">Mint</div>
            <div class="timeless">Sec</div>
        </div>
    </div>                                                                                                                                                              
    <div>
        <img src="../img/myposterr.png">
    </div>
</div>

<div class="advertising">
    <div>
        <h3>KEEP OUR INFORMATION UP TO DATE</h3>
    </div>
    <div>
        <p>To stay up to date with our website, please subscribe to our email newsletter.</p>
        <form id="sent-to-me"action="homepage.php" method="post"> <input type="text" name="email" placeholder="Enter your email addresss here"> <button class="bg-transparent">Send</button></form>
    </div>
</div>
    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo footer__logo">
          <a href=""><img style="height: 45px; width: 200px;" src="img/myphoto.jpg" alt="logo"></a>
          </div>
          <p class="section__description">
           Read more books and journal to expand your brain and knowledge
          </p>
        </div>
        <div class="footer__col">
          <h4>Privacy</h4>
          <ul class="footer__links">
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Cookies</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Product</h4>
          <ul class="footer__links">
            <li><a href="#">Menu</a></li>
            <li><a href="#">Special Offer</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Information</h4>
          <ul class="footer__links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Lispita Sari. All rights reserved.
      </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    const slide = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function showSlide(index) {
      slide.forEach((slide, i) => {
        if (i === index) {
          slide.classList.add('active');
        } else {
          slide.classList.remove('active');
        }
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slide.length;
      showSlide(currentSlide);
    }

    function prevSlide() {
      currentSlide = (currentSlide - 1 + slide.length) % slide.length;
      showSlide(currentSlide);
    }

    const slideInterval = setInterval(nextSlide, 2000);

    $(document).ready(function(){
      $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: true, 
      });
    });

    var countDownDate = new Date("June 30, 2024 00:00:00").getTime();

    
    var countdownInterval = setInterval(function() {

      var now = new Date().getTime();


      var distance = countDownDate - now;
   

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);


      document.querySelector(".time-count.days").innerHTML = days;
      document.querySelector(".time-count.hours").innerHTML = hours;
      document.querySelector(".time-count.minutes").innerHTML = minutes;
      document.querySelector(".time-count.seconds").innerHTML = seconds;


      if (distance < 0) {
        clearInterval(countdownInterval);
        clearInterval(slideInterval);
        document.querySelector(".time-count").innerHTML = "EXPIRED";
      }
    }, 1000);
</script>

</body>
</html>
