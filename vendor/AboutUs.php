<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Natembea Health Center</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color:rgb(243, 225, 212);
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    .header {
      position: fixed;
      top: 10px;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 1000;
    }
    
    .logo {
      width: 130px;
      height: auto;
      margin-right: 3000px;
      margin-top:-20px;
    }

    .navigation {
      display: flex;
      align-items: center;
      margin-left: 600px;
      margin-top: -50px;
    }

    .navigation a {
      color: #8B3A3A;
      text-decoration: none;
      margin-right: 30px;
      font-size: 18px;
      font-weight: bold;
    }

    header {
      color: #8B3A3A;
      padding: 20px 0;
      text-align: center;
      background-color: #fff;
    }

    h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    p {
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .about-section {
      background-color: #fff;
      padding: 50px 0;
    }

    .about-section h2 {
      font-size: 30px;
      text-align: center;
      margin-bottom: 10px;
      margin-top: -60px;
      background-color: #8B3A3A; 
      color: #f3e2d4; 
      padding: 10px 0;
    }

    .about-content {
      display: flex;
      justify-content: space-between;
      text-align: justify;
    }

    .about-img {
      flex: 1;
      text-align: center;
      margin-top: 50px;
    }

    .about-img img {
      width: 100%;
      max-width: 500px;
      border-radius: 8px;
    }

    .about-text {
      flex: 1;
      padding: 0 20px;
      color: #4d2c2c; 
    }

    .team-section {
      background-color: #f3e2d4; 
      padding: 50px 0;
    }

    .team-section h2 {
      font-size: 30px;
      text-align: center;
      margin-bottom: 30px;
      color: #8B3A3A;
    }

    .team-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .team-member {
      width: 300px;
      margin: 20px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .team-member img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
    }

    .team-member h3 {
      font-size: 24px;
      margin-bottom: 10px;
      color: #8B3A3A; 
    }

    .team-member p {
      font-size: 16px;
      line-height: 1.6;
      color: #4d2c2c;
    }

    footer {
      background-color: #8B3A3A;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    footer p {
      font-size: 16px;
    }
  </style>
</head>
<body>

  <header>
    <div class="container">
      <img class="logo" src="../Images/logo.jpg" alt="Logo">
      <div class="navigation">
        <a href="index.php">Home</a>
        <a href="AboutUs.php">About Us</a>
        <a href="ourservices.php">Our Services</a>
        <a href="contactUs.php">Contact Us</a>
      </div>
    </div>
  </header>

  <div class="about-section">
    <div class="container">
      <h2>About Us</h2>
      <div class="about-content">
        <div class="about-img">
          <img src="../Images/Natembea_img.jpg" alt="About Us Image">
        </div>
        <div class="about-text">
          <p>Being a member of Ashesi community, I noticed the struggle that Ashesi community member face concerning the distance of the health centre from their relative residents to get medical attention. As a solution, I took an initiative to build a system to help bring the health centre closer to them and make it easy for their health information to be kept safe.</p>
          <p>This platform is of importance to both students and all other Ashesi community memjbers. It is designed to connect students and other members of this community to the health centre through online booking of appointments, online chat or call services with nurses. Also, the system provides a means for health workers to store and keep track of records of each patient who visits the hospitals.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="team-section">
    <div class="container">
      <h2>MeetThe Health Center Team</h2>
      <div class="team-container">
        <div class="team-member">
          <img src="../Images/doctor2.jpg" alt="Team Member 1">
          <h3>Dr. Josiane Izere</h3>
          <p>Head of Dentistry Department</p>
        </div>
        <div class="team-member">
          <img src="../Images/doctor1.jpg" alt="Team Member 2">
          <h3>Dr. Serge Ishimwe</h3>
          <p>Head of Ophtamology Department</p>
        </div>
        <div class="team-member">
          <img src="../Images/doctor3.jpg" alt="Team Member 3">
          <h3>Dr.Delphine Shimirwa</h3>
          <p>Information Technologist and Neurology Department Head</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <p>&copy; 2024 Natembea Health Center. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
