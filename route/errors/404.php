<?php
$error = [
  "status" => 404,
  "message" => "Tidak dapat menemukan halaman"
];

header("Content-Type: application/json");
echo json_encode($error, JSON_PRETTY_PRINT);
