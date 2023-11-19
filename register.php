<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        background-color: #45a049;
    }

    .success {
        color: #008000;
        margin-bottom: 10px;
    }

    .error {
        color: #ff0000;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <form action="registration_handler.php" method="post">
        <h2>User Registration</h2>

        <label for="firstName">First Name:</label>
        <input type="text" name="firstname" id="" required>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastname" id="" required>

        <label for="username">Username:</label>
        <input type="text" name="username" id="" required>

        <label for="Email">Email:</label>
        <input type="text" name="email" id="" required>

        <label for="address">Address:</label>
        <input type="text" name="address" id="" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="" required>

        <button class="btn btn-primary w-100 py-3" type="submit" name="register" value="Register">register</button>

</body>

</html>