<header>
    <h1>Product List</h1>
</header>

<div class="content">
    <div class="product-filters">
        <div class="filter">
            <label for="category">Kategori:</label>
            <select id="category">
                <option>Semua</option>
                <option>Fashion</option>
                <option>Elektronik</option>
                <option>Aksesoris</option>
            </select>
        </div>
        <div class="filter">
            <label for="stock">Stok:</label>
            <select id="stock">
                <option>Semua</option>
                <option>Ready</option>
                <option>Hampir Habis</option>
                <option>Habis</option>
            </select>
        </div>
    </div>

    <div class="products-grid">
        <!-- Product 1 -->
        <div class="product-card">
            <div class="product-image">
                <img src="https://via.placeholder.com/250x200?text=Kaos+Oversize" alt="Kaos Oversize">
                <div class="stock-status in-stock">Ready</div>
            </div>
            <div class="product-info">
                <h3>Kaos Oversize</h3>
                <div class="category">Fashion</div>
                <div class="price">Rp 89.000</div>
                <div class="product-actions">
                    <button class="add-to-cart" title="Tambah ke Keranjang">
                        <i class="fas fa-cart-plus"></i>
                    </button>
                    <button class="delete" title="Hapus Produk">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <div class="product-image">
                <img src="https://via.placeholder.com/250x200?text=Smartphone+X" alt="Smartphone X">
                <div class="stock-status low-stock">Hampir Habis</div>
            </div>
            <div class="product-info">
                <h3>Smartphone X</h3>
                <div class="category">Elektronik</div>
                <div class="price">Rp 3.499.000</div>
                <div class="product-actions">
                    <button class="add-to-cart" title="Tambah ke Keranjang">
                        <i class="fas fa-cart-plus"></i>
                    </button>
                    <button class="delete" title="Hapus Produk">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <div class="product-image">
                <img src="https://via.placeholder.com/250x200?text=Jam+Tangan+Stylish" alt="Jam Tangan Stylish">
                <div class="stock-status out-of-stock">Habis</div>
            </div>
            <div class="product-info">
                <h3>Jam Tangan Stylish</h3>
                <div class="category">Aksesoris</div>
                <div class="price">Rp 249.000</div>
                <div class="product-actions">
                    <button class="add-to-cart" title="Tambah ke Keranjang" disabled>
                        <i class="fas fa-cart-plus"></i>
                    </button>
                    <button class="delete" title="Hapus Produk">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
