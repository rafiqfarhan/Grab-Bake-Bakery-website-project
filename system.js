// Initialize cart array and retrieve cart data from local storage
var cart = JSON.parse(localStorage.getItem('cart')) || [];

// Function to add an item to the cart
function addToCart(itemName, itemPrice) {
    var item = {
        name: itemName,
        price: itemPrice
    };
    cart.push(item);

    // Save the updated cart in local storage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Update the cart display
    displayCart();
}

// Function to display the cart
function displayCart() {
    var cartList = document.getElementById('cart-list');
    cartList.innerHTML = ''; // Clear the existing list

    var totalPrice = 0;

    cart.forEach(function (item, index) {
        var listItem = document.createElement('li');
        listItem.textContent = item.name + ' - MYR ' + item.price.toFixed(2);
        cartList.appendChild(listItem);

        totalPrice += item.price;

        var removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.onclick = function () {
            removeFromCart(index);
        };
        listItem.appendChild(removeButton);
    });

    // Display the total price
    var totalPriceElement = document.createElement('p');
    totalPriceElement.textContent = 'Total Price: MYR ' + totalPrice.toFixed(2);
    cartList.appendChild(totalPriceElement);
}

// Function to remove an item from the cart
function discardFromCart(index) {
    cart.splice(index, 1);

    // Save the updated cart in local storage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Update the cart display
    displayCart();
}

// Call displayCart to initially display any existing cart items
displayCart();


    var checkoutButton = document.createElement("button");
    checkoutButton.textContent = "Checkout";
    checkoutButton.id = "checkout";
    checkoutButton.onclick = function () {
        document.getElementById("address").scrollIntoView({ behavior: 'smooth' });
    };
    cartSection.appendChild(checkoutButton);

    // Store cart data in local storage
    localStorage.setItem('cart', JSON.stringify(cart));


// Load cart from local storage
if (localStorage.getItem('cart')) {
    cart = JSON.parse(localStorage.getItem('cart'));
    displayCart();
}

// Other functions

function payNow() {
    alert("Payment successful! Thank you for your purchase.");
    document.getElementById("success-message").style.display = "block";
}

function confirmOrder() {
    alert("Order confirmed! Your goodies will be on their way!");
}

function confirmAddress() {
    alert("Your address has been saved.");
    document.getElementById("payment").scrollIntoView({ behavior: 'smooth' });
}

// Function for scrolling to sections
function scrollToSection(sectionId) {
    document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
}
document.getElementById("address").scrollIntoView({ behavior: 'smooth' });

function proceedToAddress() {
    // Redirect to the Address.html page
    window.location.href = "Address.html";
}
// Function to handle the "Proceed" button
function proceedToAddress() {
    document.getElementById('address').scrollIntoView({ behavior: 'smooth' });
}
function redirectToPaymentSection() {
    window.location.href = "#payment";
}
