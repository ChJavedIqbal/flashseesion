<h1>Add new member</h1>
@if(session('store'))
    <h3>Data saved for {{session('store')}}</h3>
@endif

<form action="UserController" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter user name" /><br><br>
    <input type="password" name="password" placeholder="Enter password" /><br><br>
    <input type="email" name="email" placeholder="Email" /><br><br>
    <button type="submit">Add User</button>


</form>
