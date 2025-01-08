<?php
require_once "../classes/FormHandler.php";

$formHandler = new FormHandler();
$id = $_GET['id'];
$record = $formHandler->getRecordById($id);

if (!$record) {
    die("Record not found.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div class="container">
        <h1>Edit Record</h1>
        <form action="../update_form.php" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($record['name']) ?>" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($record['email']) ?>" required>
            
            <label for="website">Website:</label>
            <input type="url" id="website" name="website" value="<?= htmlspecialchars($record['website']) ?>">
            
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment"><?= htmlspecialchars($record['comment']) ?></textarea>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male" <?= $record['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                <option value="Female" <?= $record['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                <option value="Other" <?= $record['gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
            </select>
            
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
