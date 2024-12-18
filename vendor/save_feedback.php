<?php
// Include the database connection file
include 'connection.php';

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $doctor = $_POST['doctor'];
        $userID = $_POST['user_id'];
        $message = $_POST['message'];
        $created_at = date('Y-m-d H:i:s'); // Current timestamp in correct format

        // Prepare and execute SQL statement to insert data into feedback table
        $stmt = $conn->prepare("INSERT INTO `feedback` (`UserID`, `DoctorID`, `Message`, `CreatedAt`) VALUES (?, ?, ?, ?)");

        // Check if the SQL statement was prepared successfully
        if ($stmt === false) {
            die("Error preparing the SQL statement: " . $conn->error);
        }

        // Bind parameters to the SQL statement
        $stmt->bind_param("iiss", $userID, $doctor, $message, $created_at);

        // Execute the SQL statement
        if ($stmt->execute()) {
            // Redirect to feedback_recieved.php
            header("Location: feedback_received.php");
            exit();
        } else {
            // Error occurred while saving feedback
            echo "Error executing the SQL statement: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }

?>