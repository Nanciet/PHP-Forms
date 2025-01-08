<?php
require_once "classes/Database.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Fetch record from the database
    $db = new Database();
    $record = $db->fetch("SELECT * FROM users WHERE id = ?", [$id]);

    if (!$record) {
        die("Record not found!");
    }
} else {
    die("Invalid ID!");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="navbar">
        <a href="form.php">Form Page</a>
        <a href="views/display.php">Stored Data</a>
    </div>
    <div class="view-container">
        <h2>View Record</h2>
        <table>
            <tr><th>ID:</th><td><?= htmlspecialchars($record['id']) ?></td></tr>
            <tr><th>Name:</th><td><?= htmlspecialchars($record['name']) ?></td></tr>
            <tr><th>Email:</th><td><?= htmlspecialchars($record['email']) ?></td></tr>
            <tr><th>Website:</th><td><?= htmlspecialchars($record['website']) ?></td></tr>
            <tr><th>Comment:</th><td><?= htmlspecialchars($record['comment']) ?></td></tr>
            <tr><th>Gender:</th><td><?= htmlspecialchars($record['gender']) ?></td></tr>
        </table>
        <button class="print-btn" onclick="window.print()">Print</button>
    </div>
</body>
</html>
