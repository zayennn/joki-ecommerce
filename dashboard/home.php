<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/auth.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - Cart</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include '../includes/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <?php
            // ambil page dari parameter URL: ?page=cart
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
            $pagePath = "./pages/$page.php";

            if (file_exists($pagePath)) {
                include $pagePath;
            } else {
                echo "<h2>Halaman tidak ditemukan.</h2>";
            }
            ?>
        </div>
    </div>

    <script src="../assets/js/dashboard.js"></script>
</body>

</html>