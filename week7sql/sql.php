<?php

$host = '127.0.0.1:3306';      // Хост (обычно localhost)
$username = 'root';  // Имя пользователя MySQL
$password = "";  // Пароль MySQL
$dbname = 'docker_academy';    // Имя базы данных

// Подключение к базе данных
$conn = mysqli_connect($host, $username, $password, $dbname);

// Проверка подключения
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

echo "Подключение успешно!\n";

$sql = "SELECT * FROM Persons";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["PersonID"]. " : " . $row["LastName"] . " " . $row["FirstName"] . "\n";
    }
} else {
    echo "0 results";
}
$conn->close();
