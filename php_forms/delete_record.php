<?php
require_once "classes/FormHandler.php";

$formHandler = new FormHandler();
$id = $_GET['id'];

if ($formHandler->deleteRecord($id)) {
    header("Location: views/display.php");
    exit;
} else {
    echo "Failed to delete record.";
}
?>
