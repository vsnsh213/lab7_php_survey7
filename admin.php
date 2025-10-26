<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

echo "<h2>Відповіді користувачів:</h2>";

$files = glob("survey/*.json");
if (count($files) === 0) {
    echo "Поки що немає відповідей.";
} else {
    foreach ($files as $file) {
        $data = json_decode(file_get_contents($file), true);
        echo "<hr>";
        echo "<b>Ім'я:</b> {$data['Ім\'я']}<br>";
        echo "<b>Email:</b> {$data['Email']}<br>";
        echo "<b>Соцмережа:</b> {$data['Соцмережа']}<br>";
        echo "<b>Час:</b> {$data['Час']}<br>";
        echo "<b>Активність:</b> {$data['Активність']}<br>";
        echo "<b>Дата:</b> {$data['Дата']}<br>";
    }
}

echo "<br><br><a href='logout.php'>Вийти</a>";
?>
