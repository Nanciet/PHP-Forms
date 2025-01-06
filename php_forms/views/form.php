<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Form Page</title>
</head>
<body>
    <div class="navbar">
        <a href="form.php">Form Page</a>
        <a href="display.php">Stored Data</a>
    </div>

    <div class="container">
        <h1>Submit Your Details</h1>
        <form action="../process_form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="website">Website:</label>
            <input type="url" id="website" name="website">

            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment"></textarea>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
