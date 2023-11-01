
// Define pizza data with prices for sizes
const pizzas = [
    {
        name: "Chicken Supreme",
        prices: {
            S: 5.00,
            M: 10.00,
            L: 15.00
        }
    },
    {
        name: "Margherita",
        prices: {
            S: 4.00,
            M: 8.00,
            L: 12.00
        }
    },
    // Add more pizza items as needed
];

// Add an event listener to the cart icon
const cartIcon = document.getElementById('cartIcon');
const cartContainer = document.getElementById('cartContainer');
const cartContent = document.getElementById('cartContent');

// Event listener to toggle the cart container
cartIcon.addEventListener('click', () => {
    cartContainer.classList.toggle('visible');
});


// Function to add an item to the cart
function addToCart(button) {
    const parent = button.closest(".food-image");
    const pizzaName = button.dataset.pizzaName;
    const size = parent.querySelector("#size").value;
    const quantity = parseInt(parent.querySelector("#quantity").value);

    const pizza = pizzas.find(pizza => pizza.name === pizzaName);

    if (pizza) {
        const price = pizza.prices[size];

        if (price) {
            const totalPrice = price * quantity;
            const cartItem = {
                name: pizzaName,
                size: size,
                quantity: quantity,
                price: totalPrice,
            };

            displayCartItem(cartItem);

            // Show the cart container after adding an item
            cartContainer.style.display = 'block';
        } else {
            alert("Invalid size selected");
        }
    } else {
        alert("Pizza not found");
    }
}


// Function to display a cart item in the cart container
function displayCartItem(cartItem) {
    // Get the cart content element
    const cartContent = document.getElementById('cartContent');

    // Create a cart item element
    const cartItemElement = document.createElement('li');
    cartItemElement.classList.add('cart-item');
    cartItemElement.innerHTML = `
        <div class="cart-item-name">${cartItem.name}</div>
        <div class="cart-item-details">
            <span>Size: ${cartItem.size}</span>
            <span>Quantity: ${cartItem.quantity}</span>
        </div>
        <div class="cart-item-price">$${cartItem.price.toFixed(2)}</div>
    `;

    // Append the cart item to the cart content
    cartContent.appendChild(cartItemElement);

    // Update the total price in the cart
    updateCartTotal();
}

// Function to update the total price in the cart
function updateCartTotal() {
    const cartContent = document.getElementById('cartContent');
    const cartTotalElement = document.getElementById('cartTotal');

    // Calculate the total price based on cart items
    let total = 0;
    const cartItems = cartContent.getElementsByClassName('cart-item');
    for (const cartItem of cartItems) {
        const priceString = cartItem.querySelector('.cart-item-price').textContent;
        const price = parseFloat(priceString.replace('$', ''));
        total += price;
    }

    // Update the total price in the cart
    cartTotalElement.textContent = `$${total.toFixed(2)}`;
}







