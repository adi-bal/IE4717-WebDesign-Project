
// Define pizza data with prices for sizes
const pizzas = [
    {
        name: "Special Hawaiian",
        prices: {
            S: 7.00,
            M: 16.00,
            L: 30.00
        }
    },
    {
        name: "Barbeque Chic",
        prices: {
            S: 5.50,
            M: 13.00,
            L: 24.00
        }
    },
    {
        name: "Classic Pepperoni",
        prices: {
            S: 6.00,
            M: 12.50,
            L: 24.00
        } 
    },
    {
        name: "Cheesy Heaven",
        prices: {
            S: 4.50,
            M: 10.00,
            L: 20.00
        } 
    },
    {
        name: "Hawaiian",
        prices: {
            S: 5.00,
            M: 11.00,
            L: 22.00
        } 
    },
    {
        name: "Tomato Cheesy",
        prices: {
            S: 5.60,
            M: 11.00,
            L: 20.00
        } 
    },
    {
        name: "Ultimate Ham",
        prices: {
            S: 6.80,
            M: 16.00,
            L: 31.00
        } 
    },
    {
        name: "Veggie Overload",
        prices: {
            S: 5.70,
            M: 12.00,
            L: 22.00
        } 
    },
    // Add more pizza items as needed
];

// Initialize an empty cart object to store items
const cart = {};

// Function to add an item to the cart
function addToCart(button) {
    event.preventDefault(); // Prevent the default anchor behavior
    const parent = button.closest(".food-image");
    const pizzaName = button.dataset.pizzaName;
    const size = parent.querySelector("#size").value;
    const quantityInput = parent.querySelector("#quantity");
    const quantity = parseInt(quantityInput.value);

    if (quantity <= 0 || isNaN(quantity)) {
        alert("Please enter a valid quantity.");
        return;
    }

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

            const cartItemContainer = document.createElement('div');
            cartItemContainer.classList.add('cart-item-container');
            cartItemContainer.style.backgroundColor = 'rgba(255, 165, 0, 0.5)';
            cartItemContainer.style.border = '1px solid #ccc';
            cartItemContainer.style.borderRadius = '5px';
            cartItemContainer.style.padding = '10px';
            cartItemContainer.style.marginBottom = '10px';
            cartItemContainer.style.marginTop = '10px';

            const cartItemElement = document.createElement('li');
            cartItemElement.classList.add('cart-item');
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

            cartItemContainer.appendChild(cartItemElement);
            cartContent.appendChild(cartItemContainer);
            total += cartItem.price;
        }
    }

    const cartTotalElement = document.getElementById('cartTotal');
    cartTotalElement.textContent = `$${total.toFixed(2)}`;

    // Add a "Clear Cart" button
    const clearCartButton = document.createElement('button');
    clearCartButton.textContent = 'Clear Cart';
    clearCartButton.addEventListener('click', clearCart);
    cartContent.appendChild(clearCartButton);

    clearCartButton.style.marginRight = '15px';
    clearCartButton.style.marginBottom = '15px';

    // Add a "Checkout" button
    const checkoutButton = document.createElement('button');
    checkoutButton.textContent = 'Checkout';
    checkoutButton.addEventListener('click', checkout);
    cartContent.appendChild(checkoutButton);

}

// Function to clear the cart
function clearCart() {
    for (const pizzaName in cart) {
        for (const size in cart[pizzaName]) {
            delete cart[pizzaName][size];
        }
    }

    updateCartUI(); // Update the cart UI to reflect the changes

    const cartContainer = document.getElementById('cartContainer');
    cartContainer.style.display = 'none'; // Hide the cart container
}

function checkout() {
    // Save cart data to localStorage (you can replace this with your server-side logic)
    localStorage.setItem('cartData', JSON.stringify(cart));

    // Redirect to the checkout page
    window.location.href = 'Checkout.html';
}








