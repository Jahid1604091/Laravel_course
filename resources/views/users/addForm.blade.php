@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
<form action="/store" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" value="{{old('name')}}">
    <br>
    @error('name')
    {{$message}}
    @enderror
    <br>
    <label for="">Email</label>
    <input type="email" name="email">
    <label for="">Password</label>
    <input type="text" name="password">
    <input type="submit" value="Add User">
</form>