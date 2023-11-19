 <?php
// Start the session
session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Grab Bake Bakery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Change flex-direction to column */
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
        }
  
        .button-container {
            margin-top: 20px;
        }

        .button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        .logout-button {
            background-color: #f44336;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Hello! Welcome to Grab Bake Bakery</h1>

    <div class="button-container">
        <a href="menu.html" class="button">Go to Menu</a>
        <a href="logouttest.php" class="button logout-button">Log Out</a>
    </div>
</body>
</html>

