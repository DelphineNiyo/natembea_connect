<?php
        
    if(isset($_SESSION['error_message'])&& $_SESSION['error_message']!=""){
           $error_message =  $_SESSION['error_message'] ;
          echo "<p class='error-message'>$error_message </p>";
     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-color:rgb(219, 178, 178);
            color: black;
            font-family: Arial, sans-serif;
            background-image: url('../Images/backgroundlogin.jpg');
            background-attachment: fixed;
            background-size: cover;
        }

        .login-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); 
            margin-top: 150px;
            height: 350px;
        }

        .login-container h2 {
            color: #6a2f2f; 
            background-color: rgba(255, 255, 255, 0.6); 
            text-align: center;
            padding: 10px;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #6a2f2f;
            margin-top: 10px;
        }

        .form-group input {
            width: 95%;
            padding: 8px;
            border: 1px solid #6a2f2f; 
            border-radius: 5px;
            background-color: white;
            color: black;
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #6a2f2f; 
            border-radius: 5px;
            background-color: white;
            color: black;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color:rgb(71, 20, 15);
            color: white;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color:rgb(174, 112, 112); 
        }

        .error-message {
            color: #d4a29c
            margin-top: 5px;
            text-align: center;
        }

        p a {
            color: #6a2f2f;
            text-decoration: none;
        }

        p a:hover {
            color: #d4a29c;
        }

    </style>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="login_action.php" method="post" name="loginForm" id="loginForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </div>
        </form>
        <p style="text-align: center;">Don't have an account? <a href="signUp.php">Register here</a></p>
        <p style="text-align: center;">Forgot password? <a href="forgot_password.php"> Reset it here</a></p>
    </div>
</body>

</html>
