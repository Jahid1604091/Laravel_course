<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login here</h2>
    <form action="/login" method="post">
    @csrf
    <br>
    <label for="">Email</label>
    <input type="email" name="email">
    <label for="">Password</label>
    <input type="text" name="password">
    <input type="submit" value="login">
</form>
</body>
</html>