<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "12345") {
        $_SESSION["admin"] = true;
        header("Location: admin.php");
        exit;
    } else {
        echo "❌ Невірний логін або пароль!";
    }
}
?>
<h2>Вхід адміністратора</h2>
<form method="POST">
    Логін: <input type="text" name="username"><br>
    Пароль: <input type="password" name="password"><br>
    <input type="submit" value="Увійти">
</form>
    