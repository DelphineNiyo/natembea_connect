<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Support - Natembea Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color: #8B0000; /* Dark Red */
            border-bottom: 2px solid #5B3C29; /* Brownish */
        }

        .container {
            width: 65%;
            margin: 70px auto;
            background-color: #fff;
            margin-right:20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #8B0000; /* Dark Red */
            text-align: center;
            background-color: #F2D1D1; /* Light Red */
            padding: 15px;
        }

        .feedback-form {
            margin-top: 30px;
        }

        .feedback-form label {
            display: block;
            margin-bottom: 5px;
            color: #5B3C29; /* Brownish */
        }

        .feedback-form input[type="text"],
        .feedback-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .feedback-form textarea {
            height: 100px;
        }

        .feedback-form input[type="submit"] {
            background-color: #8B0000; /* Dark Red */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .feedback-form input[type="submit"]:hover {
            background-color: #5B3C29; /* Brownish */
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            height: 70px; 
            width: auto;
        }

        .nav-links {
            position: absolute;
            top: 130px; 
            list-style-type: none;
            padding: 0;
            background-color: #F2D1D1; /* Light Red */
            width: 380px;
            margin-left:0px;
        }

        .nav-links li {
            margin-bottom: 50px;
            background-color: #F2D1D1; /* Light Red */
        }

        .nav-links a {
            text-decoration: none;
            color: #8B0000; /* Dark Red */
            display: flex;
            align-items: center;
            font-size: 16px; 
            font-weight: bold; 
        }

        .nav-links a:hover {
            color: #F2D1D1; /* Light Red */
            background-color: #8B0000; /* Dark Red */
            border-radius: 10px; 
            padding: 12px 20px; 
        }

        .nav-links .icon {
            margin-right: 10px;
            margin-left:10px;
        }
    </style>
</head>
<body>
    <img class="logo" src="../Images/logo.jpg" alt="Logo">
    <h1>Dashboard</h1>
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
        <h1>Your Feedback</h1>
        <p>Your feedback is very welcome and important to us. Please let us know what you think.</p>
        <form class="feedback-form" action="save_feedback.php" method="post">
            <input type='hidden' value="<?php echo isset($_SESSION['UserID']) ? $_SESSION['UserID'] : ''; ?>" id="user_id" name="user_id">
            <!-- <label for="subject">Type:</label> -->
            <!-- <select id="type" name="type" required>
                <option value="">Select Feedback Type</option>
                <option value="medical">Medical</option>
                <option value="support">Support</option>
            </select> -->
            <label for="subject">Select a doctor:</label>
            <select id="doctor" name="doctor" required style="margin-bottom:20px;">
                <?php
                // Include the doctor_list.php file
                include 'doctor_list.php';

                // Check if any doctors were fetched
                if (isset($doctorList) && !empty($doctorList)) {
                    foreach ($doctorList as $doctor) {
                      
                        echo "<option value='" . $doctor["UserID"] . "'>" . $doctor["FirstName"] . " " . $doctor["LastName"] . "</option>";

                    }
                } else {
                    echo "<option value=''>No doctors found</option>";
                }
                
                ?>
            </select>
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
