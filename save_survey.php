<?php
include_once("functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        "Ім'я" => $_POST["name"],
        "Email" => $_POST["email"],
        "Соцмережа" => $_POST["network"],
        "Час" => $_POST["time"],
        "Активність" => $_POST["activity"],
        "Дата" => date("Y-m-d H:i:s")
    ];

    saveSurvey($data);

    echo "<h2>Дякуємо, " . htmlspecialchars($_POST['name']) . "!</h2>";
    echo "<p>Форма відправлена: " . date("Y-m-d H:i:s") . "</p>";
    echo "<a href='survey.php'>Повернутись назад</a>";
}
?>
