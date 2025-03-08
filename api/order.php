<?php
require 'db.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$user_id = $data['user_id'];
$items = $data['items'];
$total_price = array_reduce($items, function($sum, $item) {
    return $sum + ($item['price'] * $item['quantity']);
}, 0);

$conn->query("INSERT INTO orders (user_id, total_price, status) VALUES ($user_id, $total_price, 'pending')");
$order_id = $conn->insert_id;

foreach ($items as $item) {
    $menu_id = $item['menu_id'];
    $quantity = $item['quantity'];
    $subtotal = $item['price'] * $item['quantity'];
    $conn->query("INSERT INTO order_items (order_id, menu_id, quantity, subtotal) VALUES ($order_id, $menu_id, $quantity, $subtotal)");
}

echo json_encode(["message" => "Order created", "order_id" => $order_id]);
?>
