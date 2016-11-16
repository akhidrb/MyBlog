<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<script src="script.js"></script> 

<h1>Khidr's Blog</h1>

<form action="" method="post">
	<label>Enter Title:</label>
	<input type="text" name="title" /><br><br>
	<label>Enter Content:</label><br>
	<textarea rows="4" cols="50" name="content">
	</textarea>
	<br>
	<input  type="submit" name="btn_submit" value="Submit">
</form>

 <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blog_posts";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully<br>";

	$sql = "INSERT INTO posts (title, content)
	VALUES ('John', 'Doe')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?> 


</body>
</html> 
