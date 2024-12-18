<!DOCTYPE html>
<html>
<head>
  <title>User Feedback | Natembea Health Center</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Updated Styles */
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2e9e4;
    }

    .container {
      margin-left: 160px;
    }

    .topnav {
      background-color: #5b0b0b;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80px;
      text-align: center;
    }

    .sidenav {
      height: 100%;
      width: 20%;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #b2876f; /* Brownish */
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #3d0f0f; /* Dark red-brown */
      display: block;
      transition: 0.3s;
      margin-bottom: 20px;
    }

    .sidenav a:hover {
      background-color: #5b0b0b; /* Dark Red */
      color: white;
    }

    .main {
      margin-left: 250px;
      margin-top: 10px;
      padding: 20px;
    }

    table {
      border-collapse: collapse;
      width: 95%;
      margin-top: 20px;
      margin-left: -10px;
    }

    th, td {
      text-align: left;
      padding: 10px;
      font-size: 14px;
    }

    th {
      background-color: #5b0b0b; /* Dark Red for Table Header */
      color: white;
      padding: 20px;
    }

    tr:nth-child(even) {
      background-color: #e8d8c3; /* Light brownish */
    }

    tr:hover {
      background-color: #d7b99b; /* Slightly darker brown */
    }

    .action-buttons button {
      background-color: #8c2f2f; /* Dark Red Button */
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-bottom: 20px;
    }

    .action-buttons button:hover {
      background-color: #5b0b0b; /* Darker red on hover */
    }

    .new-feedback-badge {
      background-color: #8c2f2f; /* Dark Red Badge */
      color: white;
      border-radius: 50%;
      padding: 5px 8px;
      font-size: 12px;
    }

    .topnav-centered img {
      height: 80px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

<div class="container">
  <div class="topnav">
    <h1 style="margin-left:-500px; font-size:25px;">User Feedback</h1>
  </div>

  <div class="sidenav">
    <div class="topnav-centered">
      <img src="../Images/logo.jpg" alt="Logo" style="height: 80px; margin-bottom:20px; margin-top:0;">
    </div>
    <a href="doctor_dashboard.php"><i class="fas fa-home"></i> Overview</a>
    <a href="Manage_appointments.php"><i class="fas fa-calendar-alt"></i> Manage Appointments</a>
    <a href="Patient_Records.php"><i class="fas fa-folder-open"></i>Manage Patient Records</a>
    <a class="active" href="user_feedback.php"><i class="fas fa-comment-dots"></i> User Feedback</a>
    <a href="profiledoctor.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
    <a href="doctor_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <div class="main">
    <h2>User Feedback</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Message</th>
          <th>Created At</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>
      <?php
          // Include the connection file
          include 'connection.php';
              $doctor_ID = isset($_SESSION['UserID']) ? $_SESSION['UserID'] : '';

          
              // Prepare the SQL statement to prevent SQL injection
              $stmt = $conn->prepare("SELECT * FROM feedback WHERE UserID = ?");
              $stmt->bind_param("i", 23);
              $stmt->execute();
              $result = $stmt->get_result();

              if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "Something";
                    echo "<tr>
                            <td>" . htmlspecialchars($row['name']) . "</td>
                            <td>" . htmlspecialchars($row['email']) . "</td>
                            <td>" . htmlspecialchars($row['subject']) . "</td>
                            <td>" . htmlspecialchars($row['Message']) . "</td>
                            <td>" . htmlspecialchars($row['CreatedAt']) . "</td>
                            <td>
                              <form action='connection.php' method='get'>
                                <button type='submit' name='update' style='background-color: #0d452f; color:white; padding:10px; margin-bottom:20px;'>Respond</button>
                                <button type='submit' name='delete' style='background-color: #0d452f; color:white; padding:10px;'>Delete</button>
                              </form>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
            ?>
      </tbody>
    </table>
    <div class="new-feedback-badge">3</div>
  </div>
</div>

</body>
</html>