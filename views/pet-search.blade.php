



@extends('app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for a Pet's Details</title>
</head>
<body>
    <form action="petsearch.php" method="post">
        <p>Enter fully or partially name of a pet: <input type="text" name="name"/></p>
        <p> <input type="submit" value="find that pet"/></p>
    </form>
</body>
</html>

@endsection