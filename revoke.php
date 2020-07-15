<?php
require("func/conn.php");
require("func/settings.php");

if((int)$_GET['id']) {
    $stmt = $conn->prepare("UPDATE friends SET status = 'REVOKED' WHERE id = ?");
    $stmt->bind_param("s", $_GET['id']);
    $stmt->execute();
    $stmt->close();
    header("Location: friends.php");
}
?>