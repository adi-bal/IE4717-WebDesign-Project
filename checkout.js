document.addEventListener('DOMContentLoaded', function () {
    const checkoutCartContent = document.getElementById('checkoutCartContent');
    const checkoutCartTotal = document.getElementById('checkoutCartTotal');

    // Retrieve cart data from localStorage
    const cartData = JSON.parse(localStorage.getItem('cartData'));

    if (cartData) {
        // Initialize the total price
        let total = 0;

        // Loop through the cart data and display it on the checkout page
        for (const pizzaName in cartData) {
            for (const size in cartData[pizzaName]) {
                const cartItem = cartData[pizzaName][size];

                const cartItemContainer = document.createElement('div');
                cartItemContainer.classList.add('cart-item-container');

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

                cartItemContainer.appendChild(cartItemElement);
                checkoutCartContent.appendChild(cartItemContainer);
                cartItemElement.style.listStyle = 'none';
                cartItemContainer.style.backgroundColor = 'rgba(230, 0, 0, 0.3)';
                cartItemContainer.style.border = '1px solid #ccc';
                cartItemContainer.style.borderRadius = '5px';
                cartItemContainer.style.padding = '10px';
                cartItemContainer.style.marginBottom = '10px';
                cartItemContainer.style.marginTop = '10px';

                // Update the total price
                total += cartItem.price;
            }

            // Display the total price on the checkout page
            checkoutCartTotal.innerHTML = `<strong>Total:</strong> $${total.toFixed(2)}`;
            document.getElementById('cartTotal').value = total.toFixed(2);
            total_form = total;
        }
    } else {
        // Handle the case where the cart is empty
        checkoutCartContent.innerHTML = 'Your cart is empty';
        checkoutCartTotal.textContent = ''; // Clear the total if the cart is empty
    }
});

const cartContainer = document.getElementById('cartContainer');
cartContainer.style.display = 'block';

function submitOrder() {
    // Assuming you're using innerText or innerHTML to store the cart content and total
    document.getElementById('cartContent').value = document.getElementById('checkoutCartContent').innerText;
    document.getElementById('cartTotal').value = total_form;
    
    // Now submit the form
    document.getElementById('orderForm').submit();
}


