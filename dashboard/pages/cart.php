<header>
    <h1>Shopping Cart</h1>
    <div class="cart-actions">
        <button class="continue-shopping">
            <i class="fas fa-arrow-left"></i> Continue Shopping
        </button>
    </div>
</header>

<div class="content">
    <div class="cart-items">
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product-info">
                        <img src="https://via.placeholder.com/60" alt="Product">
                        <div>
                            <h4>Smartphone X</h4>
                            <p>Color: Black</p>
                        </div>
                    </td>
                    <td>$599.99</td>
                    <td>
                        <div class="quantity-control">
                            <button class="decrease">-</button>
                            <input type="number" value="1" min="1">
                            <button class="increase">+</button>
                        </div>
                    </td>
                    <td>$599.99</td>
                    <td>
                        <button class="remove-item"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="product-info">
                        <img src="https://via.placeholder.com/60" alt="Product">
                        <div>
                            <h4>Wireless Headphones</h4>
                            <p>Color: White</p>
                        </div>
                    </td>
                    <td>$129.99</td>
                    <td>
                        <div class="quantity-control">
                            <button class="decrease">-</button>
                            <input type="number" value="2" min="1">
                            <button class="increase">+</button>
                        </div>
                    </td>
                    <td>$259.98</td>
                    <td>
                        <button class="remove-item"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="cart-summary">
        <div class="summary-card">
            <h3>Order Summary</h3>
            <div class="summary-row">
                <span>Subtotal</span>
                <span>$859.97</span>
            </div>
            <div class="summary-row">
                <span>Shipping</span>
                <span>$15.00</span>
            </div>
            <div class="summary-row">
                <span>Tax</span>
                <span>$85.00</span>
            </div>
            <div class="summary-row total">
                <span>Total</span>
                <span>$959.97</span>
            </div>
            <button class="checkout-btn">Proceed to Checkout</button>
        </div>
    </div>
</div>