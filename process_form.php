<?php
require_once "classes/FormHandler.php";

$formHandler = new FormHandler();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $formHandler->saveFormData($_POST);

    if ($result) {
        header("Location: views/display.php");
        exit;
    } else {
        echo "Failed to save data. Please try again.";
    }
}
