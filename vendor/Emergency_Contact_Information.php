<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Contact Information - Natembea Health Center</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color:rgb(69, 13, 13);
            border-bottom: 2px solid black; 
        }
        .container {
            width: 65%;
            margin: 70px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1; 
            position: relative; 
            margin-left:400px;
        }
        h1 {
            color:rgb(69, 13, 13);
            text-align: center;
            background-color:rgb(222, 182, 182);
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .emergency-info {
            margin-top: 30px;
        }
        .emergency-info p {
            margin-bottom: 15px;
            color:rgb(69, 13, 13);
        }
        .emergency-info ul {
            list-style-type: none;
            padding: 0;
        }
        .emergency-info li {
            margin-bottom: 10px;
        }
        .emergency-info li strong {
            font-weight: bold;
        }
        .emergency-info li:last-child {
            margin-bottom: 0;
        }
        
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            height: 70px; 
            width: auto;
            z-index: 2; 
        }
        .nav-links {
            list-style-type: none;
            padding: 0;
            background-color:rgb(222, 182, 182);
            width: 380px;
            margin-left:10px;
            z-index: 2; 
            position: absolute;
            top: 130px; 
        }
        .nav-links li {
            margin-bottom: 50px;
            background-color:rgb(222, 182, 182);
        }
        .nav-links a {
            text-decoration: none;
            color:rgb(69, 13, 13); 
            display: flex;
            align-items: center;
            font-size: 16px; 
            font-weight: bold; 
        }
        .nav-links a:hover {
            color:rgb(14, 37, 22);  
            border-radius: 10px; 
            padding: 12px 20px; 
        }
        .nav-links .icon {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <img class="logo" src="../Images/logo.jpg" alt="Logo">
    <h1>Emergency Contact Information</h1>
    <ul class="nav-links">
        <li><a href="User_dashboard.php"><i class="fas fa-home icon"></i> Home</a></li>
        <li><a href="bookappointment.php"><i class="fas fa-calendar-alt icon"></i> Appointments</a></li>
        <li><a href="Insurance.php"><i class="fas fa-file-invoice-dollar icon"></i> Insurance</a></li>
        <li><a href="Emergency_Contact_Information.php"><i class="fas fa-phone icon"></i> Emergency Contact Information</a></li>
        <li><a href="Feedbacksupport.php"><i class="fas fa-comments icon"></i> Feedback and Support</a></li>
        <li><a href="profilepatient.php"><i class="fas fa-user-edit"></i> Edit my profile</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
    <div class="container">
        <div class="emergency-info">
            <p style=" color:#0d452f; margin-bottom:30px; font-size:22px;background-color:#dedab6;">In case of emergency, please contact one of the following:</p>
            <ul>
                <li style=" color:#0d452f; margin-bottom:30px;"><strong>Nurse Selasi:</strong>   +233 5998699</li>
                <li style=" color:#0d452f; margin-bottom:30px;"><strong>Security Guard 1:</strong> +233 547657152</li>
                <li style=" color:#0d452f; margin-bottom:30px;"><strong>Security in Charge of Fire Fighting</strong> +233 65778822</li>
            </ul>
        </div>
    </div>
</body>
</html>