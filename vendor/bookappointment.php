<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Natembea Health Center</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 90px; 
        }
        header {
            background-color:rgb(255, 255, 255);
            border-bottom: 2px solid black; 
            z-index: 2; 
            position: fixed; 
            width: 100%; 
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
            color:rgb(65, 13, 13);
            text-align: center;
            background-color:rgb(255, 255, 255);
            z-index: 2; 
            top: 0; 
            left: 0; 
            width: 100%; 
            background-attachment: fixed; 
            margin-top:-50px;
        }

        h2 {
            color:rgb(70, 10, 10);
            text-align: center;
            background-color:rgb(255, 255, 255);
        }

        .feedback-form {
            margin-top: 30px;
        }

        .feedback-form label {
            display: block;
            margin-bottom: 5px;
            color:rgb(57, 8, 8);
            font-size:16px;
        }

        .feedback-form input[type="text"],
        .feedback-form textarea,
        .feedback-form input[type="date"],
        .feedback-form input[type="time"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .feedback-form textarea {
            height: 100px;
        }

        .feedback-form input[type="submit"] {
            background-color:rgb(88, 44, 25);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .feedback-form input[type="submit"]:hover {
            background-color:rgb(99, 37, 18);
        }

        .logo {
            position: fixed;
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
            margin-left: 0px;
            z-index: 2; 
            position: fixed; 
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
            color:rgb(98, 58, 47);  
            background-color:#0d452f; 
            border-radius: 10px; 
            padding: 12px 20px; 
        }

        .nav-links .icon {
            margin-right: 10px; 
            margin-left:10px;
        }

        .action-buttons {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }

        .action-buttons button {
            padding: 8px 16px;
            background-color:rgb(69, 13, 13);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .action-buttons button:hover {
            background-color:rgb(49, 9, 9);
        }

        .insurance-table {
            margin-top: 20px;
            display: block; 
            overflow-x: auto; 
        }

        .insurance-table table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px; 
        }

        .insurance-table th, .insurance-table td {
            border: 1px solid #ccc;
            padding: 6px; 
            text-align: left;
        }

        .insurance-table th {
            background-color:rgb(69, 13, 13);
            color: #fff;
        }

        .insurance-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action-buttons button {
            padding: 6px 12px; 
            font-size: 12px; 
            background-color:#0d452f;
        }
            .overlay {
        display: none;
        align-items: center;
        justify-content: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        }


        .popup {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        color: black;
        max-width: 400px;
        width: 80%;
        }

        .popup label {
        display: block;
        margin-bottom: 10px;
        color:rgb(137, 91, 54);
        font-weight: bold;
        }

        .popup input[type="text"],
        .popup input[type="number"] {
        width: calc(100% - 20px);
        padding: 8px;
        margin-bottom: 10px;
        border: 1px rgb(137, 90, 54);
        border-radius: 5px;
        }

        .popup button {
        width: calc(50% - 5px);
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color:rgb(117, 59, 41);
        color: white;
        cursor: pointer;
        }

        #cancel {
        margin-top :10px;
        background-color: #ff6666;
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
        <h2>Natembea Health Center | Book Appointments</h2>    
    
        <p>Book appointments here to meet the specialists on Campus!</p>
        <form class="feedback-form" action="save_appointment.php" method="post">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email" required>
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" required>
            <label for="doctor">Select Doctor</label>
            <input type='hidden' value="<?php echo isset($_SESSION['UserID']) ? $_SESSION['UserID'] : ''; ?>" id="user_id" name="user_id">

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
            <label for="reason">Reason For Appointment</label>
            <textarea id="reason" name="reason" required></textarea>
            <label for="date">Appointment Date</label>
            <input type="date" id="date" name="date" required>
            <label for="time">Appointment Time</label>
            <input type="time" id="time" name="time" required>
            <div class="action-buttons">
                <button type="submit"><i class="fas fa-save"></i> Book appointment</button>
            </div>
        </form>

        <div class="insurance-table">
            <h2>Appointment Information</h2>
            <table>
                <thead>
                    <tr>            
                        <th>FullName</th>
                        <th>SelectedDoctor</th>
                        <th>ReasonForAppointment</th>
                        <th>AppointmentDate</th>
                        <th>AppointmentTime</th>
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                   
                <?php

                include 'connection.php';

                // Check if the database connection is established
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Initialize $user_id
                $user_id = $_SESSION['UserID'] ?? null;

                // Check if $user_id is valid
                if ($user_id !== null) {
                    // Prepare and execute the query
                    $sql = "SELECT * FROM appointments WHERE UserID = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $user_id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    // Check if the query was successful
                    if ($result !== false) {
                        // Check if appointments were found
                        if ($result->num_rows > 0) {
                            // Output appointment information
                           while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['FullName']; ?></td>
                                <td><?php echo $doctor["LastName"]; ?></td>
                                <td><?php echo $row['Description']; ?></td>
                                <td><?php echo $row['AppointmentDate']; ?></td>
                                <td><?php echo $row['AppointmentTime']; ?></td>
                                <td class="table-actions">
                                    <button style="background-color:rgb(69, 13, 13); color:white;margin-bottom:10px;" onclick="popUp('<?php echo $row['AppointmentID']; ?>', '<?php echo $row['FullName']; ?>','<?php echo $row['ReasonForAppointment']; ?>', '<?php echo $row['AppointmentDate']; ?>', '<?php echo $row['AppointmentTime']; ?>')">Update</button>
                                    <button style="background-color: grey; color:white;"><a href="delete_appointment.php?appointment_id=<?php echo $row['AppointmentID']; ?>">Delete</a></button>
                                </td>
                            </tr>
                            <?php
                        }
                        

                        } else {
                            echo " ";
                        }
                    } else {
                        // Handle query execution error
                        echo "Error executing query: " . $stmt->error;
                    }

                    // Close the statement
                    $stmt->close();
                } else {
                    echo "User ID not found.";
                }

                // Close the database connection
                $conn->close();
                ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    function popUp(appointmentID, fullName, reasonForAppointment, appointmentDate, appointmentTime) {
    var container = document.querySelector("body"); 
    var popup = document.createElement("div");
    popup.classList.add("overlay");
    popup.style.display = "flex";
    popup.innerHTML =
    `<div class='popup'>
        <form id='feedback-form' action='update_appointment.php' method='post'>
            <input type="hidden" id="appointment_id" name="AppointmentID" value="${appointmentID}">
            <label for='fullName'>Full Name </label>
            <input type='text' id='fullName' name='fullName' value='${fullName}' required>

            <label for='reasonForAppointment'>Reason For Appointment </label>
            <textarea id='reasonForAppointment' name='reasonForAppointment' required>${reasonForAppointment}</textarea>

            <label for='appointmentDate'>Appointment Date:</label>
            <input type='date' id='appointmentDate' name='appointmentDate' value='${appointmentDate}' required>

            <label for='appointmentTime'>Appointment Time:</label>
            <input type='time' id='appointmentTime' name='appointmentTime' value='${appointmentTime}' required>

            <button type='submit'>Update</button>
        </form>

        <button id='cancel' onclick='closePopup()'>Cancel</button>
    </div>`;

    container.appendChild(popup);
}

    function closePopup() {
        var popup = document.querySelector('.overlay');
        popup.parentNode.removeChild(popup); 
    }
</script>
</html>