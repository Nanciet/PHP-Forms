<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Stored Data</title>
    <link rel="stylesheet" href="../styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="navbar">
        <a href="form.php">Form Page</a>
        <a href="display.php">Stored Data</a>
    </div>

    <div class="container">
        <h1>Stored Data</h1>
        <?php
        require_once "../classes/FormHandler.php";
        $formHandler = new FormHandler();

        // Pagination logic
        $recordsPerPage = 10;
        $totalRecords = $formHandler->getTotalRecords();
        $totalPages = ceil($totalRecords / $recordsPerPage);
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($currentPage - 1) * $recordsPerPage;

        $data = $formHandler->getAllData($recordsPerPage, $offset);
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Comment</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $data->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['website'] ?></td>
                    <td><?= $row['comment'] ?></td>
                    <td><?= $row['gender'] ?></td>
                    <!-- <td>
                        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                        <a href="../delete_record.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td> -->
                    <td>
                        <!-- View Icon -->
                        <a href="../view_record.php?id=<?= $row['id'] ?>" class="action-icon view-icon" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <!-- Edit Icon -->
                        <a href="../views/edit.php?id=<?= $row['id'] ?>" class="action-icon edit-icon" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <!-- Delete Icon -->
                        <a href="../delete_record.php?id=<?= $row['id'] ?>" class="action-icon delete-icon" title="Delete" onclick="return confirm('Are you sure?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <div class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?= $i ?>" class="<?= $i === $currentPage ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>
        </div>
    </div>
</body>
</html>
