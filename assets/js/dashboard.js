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

// products
document.addEventListener('DOMContentLoaded', function() {
    // Product quick actions
    const quickViewButtons = document.querySelectorAll('.quick-view');
    const quickCartButtons = document.querySelectorAll('.quick-cart');
    
    quickViewButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            const productCard = this.closest('.product-card');
            const productTitle = productCard.querySelector('.product-title').textContent;
            alert(`Quick View: ${productTitle}`);
        });
    });
    
    quickCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            const productCard = this.closest('.product-card');
            const productTitle = productCard.querySelector('.product-title').textContent;
            alert(`Added to cart: ${productTitle}`);
            
            // Update cart count
            const currentCount = parseInt(document.querySelector('.cart-count').textContent);
            document.querySelectorAll('.cart-count').forEach(count => {
                count.textContent = currentCount + 1;
            });
        });
    });
    
    // Product edit and delete buttons
    const editButtons = document.querySelectorAll('.edit-btn');
    const deleteButtons = document.querySelectorAll('.delete-btn');
    
    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product-card');
            const productTitle = productCard.querySelector('.product-title').textContent;
            alert(`Edit product: ${productTitle}`);
        });
    });
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product-card');
            const productTitle = productCard.querySelector('.product-title').textContent;
            
            if (confirm(`Are you sure you want to delete ${productTitle}?`)) {
                productCard.remove();
                alert(`${productTitle} has been deleted`);
            }
        });
    });
    
    // Format prices
    const formatPrices = () => {
        const prices = document.querySelectorAll('.current-price, .original-price');
        
        prices.forEach(price => {
            const value = price.textContent.replace('Rp ', '').replace(/\./g, '');
            price.textContent = 'Rp ' + parseInt(value).toLocaleString('id-ID');
        });
    };
    
    formatPrices();
    
    // Pagination
    const pageButtons = document.querySelectorAll('.page-btn:not(.disabled)');
    
    pageButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (this.classList.contains('active')) return;
            
            document.querySelector('.page-btn.active').classList.remove('active');
            this.classList.add('active');
            // Here you would typically load new page content
        });
    });
    
    // Product search
    const searchInput = document.querySelector('.product-search input');
    const searchButton = document.querySelector('.product-search button');
    
    searchButton.addEventListener('click', performSearch);
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            performSearch();
        }
    });
    
    function performSearch() {
        const searchTerm = searchInput.value.trim();
        if (searchTerm) {
            alert(`Searching for: ${searchTerm}`);
            // Here you would typically filter products
        }
    }
    
    // Filter functionality
    const categoryFilter = document.getElementById('category');
    const stockFilter = document.getElementById('stock');
    const sortFilter = document.getElementById('sort');
    
    [categoryFilter, stockFilter, sortFilter].forEach(filter => {
        filter.addEventListener('change', function() {
            const category = categoryFilter.value;
            const stock = stockFilter.value;
            const sort = sortFilter.value;
            
            console.log(`Filters changed - Category: ${category}, Stock: ${stock}, Sort: ${sort}`);
            // Here you would typically filter and sort products
        });
    });
});