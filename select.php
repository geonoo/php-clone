<?php
$conn = mysqli_connect('localhost:3306', 'root', '12345678', 'opentutorials');
$sql = "SELECT * FROM topic WHERE id = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];
echo "<h1>multi row</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];
}