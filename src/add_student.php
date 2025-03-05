<?php
$servername = "mysql_db";
$username = "user";
$password = "password";
$database = "school_db";

$conn = new mysqli($servername, $username, $password, $database, 3306);

if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$age = $_POST["age"];

	$sql = "INSERT INTO students(name, email, age) VALUES ('$name', '$email', '$age')";

	if($conn->query($sql) === TRUE) {
		echo "New student added successfully!";
	} else {
		echo "Error: " . $conn->error;
	}
}

$conn->close();
?>

<form method="POST">
	<input type="text" name="name" placeholder="Name" required>
	<input type="email" name="email" placeholder="Email" required>
	<input type="number" name="age" placeholder="Age" required>
	<button type="submit">Add Student</button>
</form>
