
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


// Initialize an empty cart object to store items
const cart = {};

// Function to add an item to the cart
function addToCart(button) {
    event.preventDefault(); // Prevent the default anchor behavior
    const parent = button.closest(".food-image");
    const pizzaName = button.dataset.pizzaName;
    const size = parent.querySelector("#size").value;
    const quantity = parseInt(parent.querySelector("#quantity").value);

    const pizza = pizzas.find(pizza => pizza.name === pizzaName);

    if (pizza) {
        const price = pizza.prices[size];

        if (price) {
            const totalPrice = price * quantity;

            // Check if the item is already in the cart
            if (cart[pizzaName] && cart[pizzaName][size]) {
                cart[pizzaName][size].quantity += quantity;
                cart[pizzaName][size].price += totalPrice;
            } else {
                // If it's a new item, add it to the cart
                if (!cart[pizzaName]) {
                    cart[pizzaName] = {};
                }

                cart[pizzaName][size] = {
                    name: pizzaName,
                    size: size,
                    quantity: quantity,
                    price: totalPrice,
                };
            }

            // Update the cart UI
            updateCartUI();

            // Show the cart container
            const cartContainer = document.getElementById('cartContainer');
            cartContainer.style.display = 'block';

        } else {
            alert("Invalid size selected");
        }
    } else {
        alert("Pizza not found");
    }
}

// Function to update the cart UI
function updateCartUI() {
    const cartContent = document.getElementById('cartContent');
    cartContent.innerHTML = '';

    let total = 0;

    for (const pizzaName in cart) {
        for (const size in cart[pizzaName]) {
            const cartItem = cart[pizzaName][size];

            const cartItemElement = document.createElement('li');
            cartItemElement.classList.add('cart-item');

// Add CSS styles to remove list styling
cartItemElement.style.listStyle = 'none';
cartItemElement.style.padding = '0';

            cartItemElement.innerHTML = `
                <div class="cart-item-name">${cartItem.name}</div>
                <div class="cart-item-details">
                    <span>Size: ${cartItem.size}</span>
                    <span>Quantity: ${cartItem.quantity}</span>
                </div>
                <div class="cart-item-price">$${cartItem.price.toFixed(2)}</div>
            `;

            cartContent.appendChild(cartItemElement);
            total += cartItem.price;
        }
    }

    const cartTotalElement = document.getElementById('cartTotal');
    cartTotalElement.textContent = `$${total.toFixed(2)}`;
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








// Define an array to store the cart items
const cartItems = [];

// Function to display a cart item in the cart container
function displayCartItem(cartItem) {
    const cartContent = document.getElementById('cartContent');
    
    // Check if the item is already in the cart
    const existingItem = cartItems.find(item => item.name === cartItem.name && item.size === cartItem.size);
    
    if (existingItem) {
        // If the item already exists, update its quantity and price
        existingItem.quantity += cartItem.quantity;
        existingItem.price += cartItem.price;
    } else {
        // If it's a new item, push it to the cartItems array
        cartItems.push(cartItem);
    }

    // Update the cart content
    renderCartContent(cartContent);

    // Update the total price in the cart
    updateCartTotal();
}

// Function to render the cart content based on the cartItems array
function renderCartContent(cartContent) {
    cartContent.innerHTML = '';

    for (const cartItem of cartItems) {
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

        cartContent.appendChild(cartItemElement);
    }
}

// Function to update the total price in the cart
function updateCartTotal() {
    const cartTotalElement = document.getElementById('cartTotal');
    
    // Calculate the total price based on the cartItems array
    let total = 0;
    for (const cartItem of cartItems) {
        total += cartItem.price;
    }

    // Update the total price in the cart
    cartTotalElement.textContent = `$${total.toFixed(2)}`;
}








