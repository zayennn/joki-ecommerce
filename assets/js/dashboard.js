document.addEventListener('DOMContentLoaded', function () {
    // Quantity controls in cart
    const quantityControls = document.querySelectorAll('.quantity-control');

    quantityControls.forEach(control => {
        const decrease = control.querySelector('.decrease');
        const increase = control.querySelector('.increase');
        const input = control.querySelector('input');

        decrease.addEventListener('click', () => {
            let value = parseInt(input.value);
            if (value > 1) {
                input.value = value - 1;
                updateCartTotal();
            }
        });

        increase.addEventListener('click', () => {
            let value = parseInt(input.value);
            input.value = value + 1;
            updateCartTotal();
        });

        input.addEventListener('change', () => {
            if (parseInt(input.value) < 1) {
                input.value = 1;
            }
            updateCartTotal();
        });
    });

    // Remove item from cart
    const removeButtons = document.querySelectorAll('.remove-item');

    removeButtons.forEach(button => {
        button.addEventListener('click', function () {
            this.closest('tr').remove();
            updateCartTotal();
            updateCartCount();
        });
    });

    // Update cart total
    function updateCartTotal() {
        const rows = document.querySelectorAll('.cart-items tbody tr');
        let subtotal = 0;

        rows.forEach(row => {
            const price = parseFloat(row.querySelector('td:nth-child(2)').textContent.replace('$', ''));
            const quantity = parseInt(row.querySelector('input').value);
            const total = price * quantity;

            row.querySelector('td:nth-child(4)').textContent = '$' + total.toFixed(2);
            subtotal += total;
        });

        const shipping = 15.00;
        const tax = subtotal * 0.1; // 10% tax
        const total = subtotal + shipping + tax;

        document.querySelector('.summary-row:nth-child(2) span:last-child').textContent = '$' + subtotal.toFixed(2);
        document.querySelector('.summary-row:nth-child(4) span:last-child').textContent = '$' + tax.toFixed(2);
        document.querySelector('.summary-row.total span:last-child').textContent = '$' + total.toFixed(2);
    }

    // Update cart count in sidebar
    function updateCartCount() {
        const itemCount = document.querySelectorAll('.cart-items tbody tr').length;
        document.querySelectorAll('.cart-count').forEach(count => {
            count.textContent = itemCount;
        });
    }

    // Add to cart buttons in products page
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            if (!this.disabled) {
                const productCard = this.closest('.product-card');
                const productName = productCard.querySelector('h3').textContent;
                const productPrice = productCard.querySelector('.price').textContent;
                const productImage = productCard.querySelector('img').src;

                alert(`${productName} added to cart!\nPrice: ${productPrice}`);

                // Update cart count
                const currentCount = parseInt(document.querySelector('.cart-count').textContent);
                document.querySelectorAll('.cart-count').forEach(count => {
                    count.textContent = currentCount + 1;
                });
            }
        });
    });

    // Initialize cart total and count
    if (document.querySelector('.cart-items')) {
        updateCartTotal();
        updateCartCount();
    }
});