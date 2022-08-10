<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Http Request</title>
</head>
<body>
    
<h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter Your Name"> <br><br>
    <input type="password" name="password" placeholder="Enter Your Password"> <br><br>
    <button type="submit">Login</button>
</form>
</body>
</html>