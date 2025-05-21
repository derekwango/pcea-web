<?php
// Capture payment confirmation
$confirmationData = json_decode(file_get_contents('php://input'), true);
file_put_contents('confirmation.log', json_encode($confirmationData, JSON_PRETTY_PRINT) . PHP_EOL, FILE_APPEND);

// Respond to M-Pesa
header('Content-Type: application/json');
echo json_encode(["ResultCode" => 0, "ResultDesc" => "Success"]);
?>
