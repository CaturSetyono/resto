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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
</head>

<body class="bg-gray-50">
    <div class="header bg-white shadow-md p-4 flex justify-between items-center sticky top-0 z-10">
        <div class="logo flex items-center">
            <img src="./images/icon/icon.png" alt="Logo Restoran" class="h-10 w-10">
            <span class="ml-2 text-xl font-bold">Restoran</span>
        </div>
        <div x-data="{ search: '' }" class="flex items-center space-x-2 ">
            <select class="border-none focus:ring-0 focus:outline-none px-2 py-1">
                <option>All</option>
                <option>Category 1</option>
                <option>Category 2</option>
            </select>
            <input type="text" x-model="search" placeholder="Cari menu..." class="border border-gray-300 rounded px-2 py-1 focus:ring-0 focus:outline-none px-2 py-1 w-40">
            <button class="text-black px-4 py-2 rounded hover:text-gray-400 transition">
                <i class="fas fa-search"></i>
            </button>
            <button class="text-black px-4 py-2 rounded hover:text-gray-400 transition">
                <i class="fa-solid fa-cart-shopping"></i>
            </button>
        </div>
    </div>

    <h1 class="text-4xl font-bold text-center my-6 text-gray-800">Daftar Menu</h1>
    <div class="menu-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
        <?php foreach ($menus as $menu): ?>
            <div class="menu-item bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="<?php echo $menu['image_url']; ?>" alt="<?php echo $menu['name']; ?>" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-900"><?php echo $menu['name']; ?></h3>
                    <p class="text-gray-600 text-sm mt-1"><?php echo $menu['description']; ?></p>
                    <p class="price text-green-500 text-lg font-bold mt-2">Rp <?php echo number_format($menu['price'], 2, ',', '.'); ?></p>
                    <div class="flex justify-between mt-3">
                        <button class="select-btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Pilih</button>
                        <button class="buy-btn bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Beli</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>