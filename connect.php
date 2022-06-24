<?php
$servername = "localhost";
$database = "b97729ln_321";
$username = "b97729ln_321";
$password = "Fhntvljh180484";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>