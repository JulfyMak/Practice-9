<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb1"; //повинна бути створена в субд

// Встановлення з'єднання 
$conn = new mysqli($servername, $username, $password, $database);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "SELECT id, login, password FROM testdb1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    echo '<table border="2" cellpadding="5"  align ="center" width="60%" height="40%">';
    echo '<tr> <td> ID </td> <td> Login </td> <td> Password </td> </tr>';    
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";

        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["login"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";

        echo "</tr>";
    }
    
    echo '</table>';
} else {
    echo "No results";
}


?>
