<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      overflow: hidden;
      background-color: #f5f5f5;
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: #ffffff;
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
      color: #9e2a2f; 
      text-decoration: none;
      margin-right: 30px;
      font-size: 18px;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    .navigation a:hover {
      color: #5c4033; 
    }

    .contact-container {
      margin-top: 120px; 
      text-align: center;
      padding: 30px;
    }

    .contact-form {
      margin-bottom: 50px;
      margin-left: 60px;
      margin-right: 60px;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .contact-form h2 {
      color: #9e2a2f;
      margin-bottom: 20px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      transition: border-color 0.3s ease;
    }

    .contact-form input:hover,
    .contact-form textarea:hover {
      border-color: #9e2a2f;
    }

    .contact-form button {
      padding: 12px 24px;
      background-color: #9e2a2f;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
      background-color: #5c4033;
    }

    .contact-info {
      margin-top: 50px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .contact-info-item {
      margin: 20px;
      text-align: center;
    }

    .contact-info-item i {
      font-size: 30px;
      margin-bottom: 10px;
      color: #9e2a2f; 
      transition: color 0.3s ease;
    }

    .contact-info-item p {
      margin: 0;
      color: #9e2a2f; 
      font-weight: bold;
    }

    .contact-info-item i:hover {
      color: #5c4033; 
    }

    .contact-info-item p:hover {
      color: #5c4033; 
    }
  </style>
</head>

<body>
  <div class="header">
    <img class="logo" src="../Images/logo.jpg" alt="Logo">
    <div class="navigation">
      <a href="login.php">Login</a>
      <a href="index.php"> Home</a>
      <a href="AboutUs.php">About Us</a>
      <a href="ourservices.php">Our Services</a>
      <a href="ContactUs.php">Contact Us</a>
    </div>
  </div>

  <div class="contact-container">
    <div class="contact-form">
      <h2>Contact Us</h2>
      <form action="message_received.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required><br>
        <input type="email" name="email" placeholder="Your Email" required><br>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea><br>
        <button type="submit">Send Message</button>
      </form>
    </div>

    <div class="contact-info">
      <div class="contact-info-item">
        <i class="fab fa-google"></i>
        <p>contact@natembeahealthcenter.com</p>
      </div>
      <div class="contact-info-item">
        <i class="fas fa-envelope"></i>
        <p>contact@natembeahealthcenter.com</p>
      </div>
      <div class="contact-info-item">
        <i class="fas fa-phone"></i>
        <p>+1234567890</p>
      </div>
      <div class="contact-info-item">
        <i class="fab fa-instagram"></i>
        <p>@natembeahealthcenter</p>
      </div>
    </div>
  </div>
</body>

</html>
