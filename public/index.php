<?php

// File: public/index.php

require_once '../api/db.php';

$pdo = getDBConnection();
$stmt = $pdo->prepare("SELECT * FROM menu");
$stmt->execute();
$menus = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Daftar Menu</h1>
    <div class="menu-container">
        <?php foreach ($menus as $menu): ?>
            <div class="menu-item">
                <img src="<?php echo $menu['image_url']; ?>" alt="<?php echo $menu['name']; ?>">
                <h3><?php echo $menu['name']; ?></h3>
                <p><?php echo $menu['description']; ?></p>
                <p class="price">Rp <?php echo number_format($menu['price'], 2, ',', '.'); ?></p>
                <button class="select-btn">Pilih</button>
                <button class="buy-btn">Beli</button>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
