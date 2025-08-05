<?php if (session_status() == PHP_SESSION_NONE) session_start(); ?>

<div class="sidebar">
    <div class="logo">
        <h2>MyShop</h2>
    </div>
    <nav>
        <ul>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                <li class="<?= (isset($_GET['page']) && $_GET['page'] == 'dashboard') || !isset($_GET['page']) ? 'active' : '' ?>">
                    <a href="home.php?page=dashboard">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
            <?php endif; ?>
            <li class="<?= (isset($_GET['page']) && $_GET['page'] == 'products') ? 'active' : '' ?>">
                <a href="home.php?page=products">
                    <i class="fas fa-box-open"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="<?= (isset($_GET['page']) && $_GET['page'] == 'cart') ? 'active' : '' ?>">
                <a href="home.php?page=cart">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Cart</span>
                    <span class="cart-count">3</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="user-profile">
        <img src="../assets/images/Capivara Gamer.jpeg" alt="User">
        <div class="user-info">
            <h4><?= isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest'; ?></h4>
            <p><?= ucfirst($_SESSION['role']) ?></p>
        </div>
    </div>
</div>