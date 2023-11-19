<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Grab Bake Bakery</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style.css">
    <style>
    /* Add your CSS styles for the Cart page here */
    </style>
</head>

<body>
    <header>
        <h1 style="font-size: 20px;"><strong>Grab Bake Bakery</strong></h1>
    </header>

    <nav>
        <a href="index.html">Home</a>
        <a href="menu.html">Menu</a>
        <a href="cart.html">Cart</a>
        <a href="delivery.html">Delivery</a>
        <a href="adminlogin.html">Log In</a>
        <a href="location.html">Location</a>
        <a href="about.html">About</a>
    </nav>
    <section id="payment">

        <h2>Payment</h2>
        <div class="payment-options">
            <form action="paynow.php" method="post">
                <label for="nameoncard">Name On Card:</label>
                <input type="text" name="nameoncard" id="" required>

                <label for="postalcode">Postal Code:</label>
                <input type="text" name="postalcode" id="" required>

                <label for="cardnumber">Card Number:</label>
                <input type="text" name="cardnumber" id="" required>

                <label for="cvv">CVV:</label>
                <input type="text" name="cvv" id="" required>

                <button class="btn btn-primary w-100 py-3" type="submit" name="payment" value="payment">Pay Now</button>


            </form>
        </div>
    </section>


    <footer>
        &copy; 2023 Grab Bake Bakery
    </footer>
</body>

</html>