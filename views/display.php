<?php 
require_once "../layout.php"; // Include the reusable layout file
require_once "../classes/FormHandler.php"; // Include the FormHandler class

// Create an instance of FormHandler
$formHandler = new FormHandler();

// Pagination logic
$recordsPerPage = 10;
$totalRecords = $formHandler->getTotalRecords();
$totalPages = ceil($totalRecords / $recordsPerPage);
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($currentPage - 1) * $recordsPerPage;

$data = $formHandler->getAllData($recordsPerPage, $offset);

// Dynamic content for the display page
$content = "
    <div class='container'>
        <h1>Stored Data</h1>
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
            <tbody>";

// Loop through data to generate rows
foreach ($data as $row) {
    $content .= "
        <tr>
            <td>{$row['id']}</td>
            <td>" . htmlspecialchars($row['name']) . "</td>
            <td>" . htmlspecialchars($row['email']) . "</td>
            <td>" . htmlspecialchars($row['website']) . "</td>
            <td>" . htmlspecialchars($row['comment']) . "</td>
            <td>" . htmlspecialchars($row['gender']) . "</td>
            <td>
                <!-- View Icon -->
                <a href='../view_record.php?id={$row['id']}' class='action-icon view-icon' title='View'>
                    <i class='fas fa-eye'></i>
                </a>
                <!-- Edit Icon -->
                <a href='../views/edit.php?id={$row['id']}' class='action-icon edit-icon' title='Edit'>
                    <i class='fas fa-edit'></i>
                </a>
                <!-- Delete Icon -->
                <a href='../delete_record.php?id={$row['id']}' class='action-icon delete-icon' title='Delete' onclick='return confirm(\"Are you sure?\")'>
                    <i class='fas fa-trash-alt'></i>
                </a>
            </td>
        </tr>";
}

$content .= "
            </tbody>
        </table>

        <div class='pagination'>";

// Pagination links
for ($i = 1; $i <= $totalPages; $i++) {
    $content .= "<a href='?page={$i}' class='" . ($i === $currentPage ? 'active' : '') . "'>{$i}</a>";
}

$content .= "
        </div>
    </div>
";

// Render the page using the layout
renderLayout("Stored Data", $content);
?>
