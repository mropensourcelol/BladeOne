@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to my SQL Database Hooray ! :)</title>
</head>
<body>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task6";
?>
<?php


if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	echo "<br>";
  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }

	$conn = mysqli_connect($servername, $username, $password, $dbname)
				or die ('Sorry, cannot connect to MySQL');
	if($conn) {
		
		echo 'You have connected to your database!';
		
	} else {
		
		echo 'Sorry, connection failed!';
		
	}




?>





</body>
</html>
@endsection