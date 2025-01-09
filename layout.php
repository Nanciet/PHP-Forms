<?php
function renderLayout($title, $content) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="../script.js" defer></script>
</head>
<body>
    <div class="navbar">
        <a href="form.php">Form Page</a>
        <a href="display.php">Stored Data</a>
        <!-- <a href="edit.php">Edit Record</a> -->
    </div>
    <div class="content">
        <?= $content ?>
    </div>
</body>
</html>
<?php
}
?>
