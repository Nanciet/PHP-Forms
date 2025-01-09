<?php
require_once "view.php";
require_once "classes/FormHandler.php";

// Retrieve record details
$id = $_GET['id'];
$user_detail = new FormHandler();
$data = $user_detail->getRecordById($id);

// Prepare content for the layout
ob_start(); // Start output buffering
?>
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
<?php
$content = ob_get_clean(); // Get the buffered content and stop buffering

// Render the layout with the content and title
renderLayout("View Record", $content);
