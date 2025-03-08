<?php
require 'db.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$order_id = $data['order_id'];
$cashier_id = $data['cashier_id'];
$payment_method = $data['payment_method'];
$amount = $data['amount'];

$conn->query("UPDATE orders SET status = 'paid' WHERE id = $order_id");
$conn->query("INSERT INTO payments (order_id, cashier_id, payment_method, amount) VALUES ($order_id, $cashier_id, '$payment_method', $amount)");

echo json_encode(["message" => "Payment successful"]);
?>
