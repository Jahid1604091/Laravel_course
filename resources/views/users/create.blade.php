<!-- <form action="/add-user" method="POST">
    @csrf
    <input type="text" placeholder="User name...">
    <input type="submit" value="Add User">
</form>


<form action="/edit-user" method="POST">
    @csrf
    @method('PUT')
    <input type="text" placeholder="User name...">
    <input type="submit" value="Update">
</form>


<form action="/edit-username" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" placeholder="User name...">
    <input type="submit" value="Update Name">
</form>


<form action="/delete-user" method="POST">
    @csrf
    @method('DELETE')
    <input type="text" placeholder="User name...">
    <input type="submit" value="Delete User">
</form> -->


 <!-- final refined -->
<form action="/users" method="POST">
    @csrf
    <input type="text" placeholder="User name...">
    <input type="submit" value="Add User">
</form>


<form action="/users" method="POST">
    @csrf
    @method('PUT')
    <input type="text" placeholder="User name...">
    <input type="submit" value="Update">
</form>


<form action="/users" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" placeholder="User name...">
    <input type="submit" value="Update Name">
</form>


<form action="/users" method="POST">
    @csrf
    @method('DELETE')
    <input type="text" placeholder="User name...">
    <input type="submit" value="Delete User">
</form>


<form action="/any" method="POST">
    @csrf
    @method('PUT')
    <input type="text" placeholder="User name...">
    <input type="submit" value="Any">
</form>