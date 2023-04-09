<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

if (empty($_POST["name"]) || empty($_POST["description"]) || empty($_POST["price"])) {
	echo "Please fill out all fields with valid data.";
    echo "<br>Values not inserted";
} 
else if(!empty($_POST["name"]) && !empty($_POST["description"]) && !empty($_POST["price"]) && !is_numeric($_POST["price"])){
    echo "Please enter a valid price";
    echo "<br>Values not inserted";
}

else {
	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);

	
	$sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";
	if (mysqli_query($conn, $sql)) {
		echo "Product added successfully.";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
mysqli_close($conn);
?>
