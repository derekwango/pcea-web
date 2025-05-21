<?php
// Capture validation request
$validationData = json_decode(file_get_contents('php://input'), true);
file_put_contents('validation.log', json_encode($validationData, JSON_PRETTY_PRINT) . PHP_EOL, FILE_APPEND);

// Respond to M-Pesa
header('Content-Type: application/json');
echo json_encode(["ResultCode" => 0, "ResultDesc" => "Accepted"]);
?>
