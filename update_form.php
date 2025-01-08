<?php
require_once "classes/FormHandler.php";

$formHandler = new FormHandler();
$id = $_POST['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $formHandler->updateRecord($id, $_POST);

    if ($result) {
        header("Location: views/display.php");
        exit;
    } else {
        echo "Failed to update data.";
    }
}
?>
