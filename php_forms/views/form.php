<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Validation Form</title>
    <link rel="stylesheet" href="../styles.css">
    <script src="../script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>PHP Form Validation</h1>
        <form action="../process_form.php" method="POST" id="userForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="website">Website:</label>
            <input type="url" id="website" name="website">
            
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment"></textarea>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
