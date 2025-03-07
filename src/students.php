<?php
$servername = "mysql_db";
$username = "user";
$password = "password";
$database = "school_db";

$conn = new mysqli($servername, $username, $password, $database, 3306);

if($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM students");

echo "<h2>Student List</h2>";
echo "<table border='1'>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Age</th>
			<th>Action</th>
		</tr>";

while($row = $result->fetch_assoc()) {
	echo "<tr> 
			<td>{$row['id']}</td>
			<td>{$row['name']}</td>
			<td>{$row['email']}</td>
			<td>{$row['age']}</td>
			<td><a href='delete_student.php?id={$row['id']}'>Delete</a></td>
		</tr>";
}
echo "</table>";

$conn->close();
?>