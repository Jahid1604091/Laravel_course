<h2>Register here</h2>
<form action="/register" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" value="{{old('name')}}">
    <br>

    <br>
    <label for="">Email</label>
    <input type="email" name="email">
    <br>
    <label for="">Password</label>
    <input type="text" name="password"><br>
    <input type="submit" value="Register">
</form>