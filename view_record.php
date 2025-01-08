<?php
require_once "classes/FormHandler.php";
$id = $_GET['id'];
$user_detail = new FormHandler();
$data = $user_detail-> getRecordById($id);
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
        <a href="views/form.php">Form Page</a>
        <a href="views/display.php">Stored Data</a>
    </div>
    <div class="view-container">
        <h2>View Record</h2>
        <table>
            <tr><th>ID:</th><td><?= htmlspecialchars($data['id']) ?></td></tr>
            <tr><th>Name:</th><td><?= htmlspecialchars($data['name']) ?></td></tr>
            <tr><th>Email:</th><td><?= htmlspecialchars($data['email']) ?></td></tr>
            <tr><th>Website:</th><td><?= htmlspecialchars($data['website']) ?></td></tr>
            <tr><th>Comment:</th><td><?= htmlspecialchars($data['comment']) ?></td></tr>
            <tr><th>Gender:</th><td><?= htmlspecialchars($data['gender']) ?></td></tr>
        </table>
        <button class="print-btn" onclick="window.print()">Print</button>
    </div>
</body>
</html>
