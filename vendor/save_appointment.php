<?php
// Include the database connection file
include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $doctor = $_POST['doctor'];
    $reason = $_POST['reason'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $userID = $_POST['user_id'];
    $status = "pending";
    

    
   
   
    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO `appointments` (`UserID`, `DoctorID`, `AppointmentDate`, `AppointmentTime`, `Status`, `Description`) VALUES (?, ?, ?, ?, ?, ?)");

    
    
    // Check if the SQL statement was prepared successfully
    if ($stmt === false) {
        die("Error in preparing the SQL statement: " . $conn->error);
    }

    // Bind parameters to the SQL statement
    // "i" for integer, "s" for string (adjust the types as needed)
    $stmt->bind_param("iissss", $userID, $doctor, $date, $time, $status, $reason);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Redirect to appointment_created.php
        header("Location: appointment_created.php");
        exit();
    } else {
        // Error occurred while saving appointment
        echo "Error in execution: " . $stmt->error;
    }


    // Close statement
    $stmt->close();

    // Close database connection
    $conn->close();
}
?>