<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      overflow: hidden;
      background-color: #f4f4f4;
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: #6a2f2f; /* Dark Red */
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 1000;
    }

    .logo {
      width: 150px;
      height: auto;
      margin-right: 5px;
    }

    .navigation {
      display: flex;
      align-items: center;
      margin-right: 5px;
    }

    .navigation a {
      color: #fff;
      text-decoration: none;
      margin-right: 30px;
      font-size: 18px;
      font-weight: bold;
    }

    .navigation a:hover {
      color: #d4a29c; /* Light Brown */
    }

    .landing-container {
      position: relative;
      height: 100vh;
      overflow: hidden;
      margin-top: 80px;
    }

    .slide {
      width: 100%;
      height: 100%;
      position: absolute;
      transition: opacity 1s ease-in-out;
      opacity: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .slide.active {
      opacity: 1;
    }

    .image-container {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 100px;
      cursor: pointer;
      color: #6a2f2f;
      background: none;
      border: none;
    }

    .arrow.left {
      left: 20px;
    }

    .arrow.right {
      right: 20px;
    }

    .content {
      color: #fff;
      text-align: center;
      z-index: 1;
    }

    .content h1,
    .content p {
      background-color: rgba(106, 47, 47, 0.6); /* Dark Red overlay */
      padding: 10px;
      border-radius: 10px;
    }

    .button-container {
      margin-top: 20px;
    }

    .button {
      padding: 10px 20px;
      background-color:rgb(188, 119, 35); /* Light Brown */
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-right: 10px;
    }

    .button:hover {
      background-color:rgb(191, 109, 109); /* Dark Red */
    }
  </style>
</head>

<body>
  <div class="header">
    <img class="logo" src="../Images/logo.jpg" alt="Logo">
    <div class="navigation">
      <a href="login.php">Login</a>
      <a href="index.php">Home</a>
      <a href="AboutUs.php">About Us</a>
      <a href="ourservices.php">Our Services</a>
      <a href="ContactUs.php">Contact Us</a>
    </div>
  </div>

  <div class="landing-container">
    <div class="slide active">
      <div class="image-container">
        <img src="../Images/slide1.jpg" alt="Slide 1 Image">
      </div>
      <div class="content">
        <h1><strong>Welcome to Natembea Health center</strong></h1>
        <p>Connect with your favorite health care givers.</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='signUp.php'">Get Started</button>
        </div>
      </div>
    </div>

    <!-- Add other slides here -->
    <div class="slide">
      <div class="image-container">
        <img src="../Images/slide2.jpg" alt="Slide 2 Image">
      </div>
      <div class="content">
        <h1><strong>Feeling Sick?</strong></h1>
        <p>Reach out to us and find out where it's not going right.</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='signUp.php'">Get Started</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="image-container">
        <img src="../Images/slide3.jpg" alt="Slide 3 Image">
      </div>
      <div class="content">
        <h1><strong>Your Health is Our Priority!</strong></h1>
        <p>Just talk to us and check out.</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='signUp.php'">Get Started</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="image-container">
        <img src="../Images/slide4.jpg" alt="Slide 4 Image">
      </div>
      <div class="content">
        <h1><strong>You are on the Right platform!</strong></h1>
        <p>Allow us to take care of your health.</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='signUp.php'">Get Started</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="image-container">
        <img src="../Images/slide5.jpg" alt="Slide 5 Image">
      </div>
      <div class="content">
        <h1><strong>Take Care of Your Health Here</strong></h1>
        <p>Use our platform to connect with individuals who can help you take care of you health.</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='signUp.php'">Get Started</button>
        </div>
      </div>
    </div>
    <button class="arrow left" onclick="prevSlide">&#8249;</button>
    <button class="arrow right" onclick="nextSlide">&#8250;</button>
  </div>

  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    function prevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }

    function autoChangeSlide() {
      setInterval(() => {
        nextSlide();
      }, 3000); // Change slide every 3 seconds
    }

    showSlide(currentSlide);
    autoChangeSlide();
  </script>
</body>

</html>
