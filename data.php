<?php
require_once 'connect.php';
$stmt = $conn->prepare('select * from medical_record');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($results);
?>