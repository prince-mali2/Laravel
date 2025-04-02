<h1>Proile Page</h1>
@if(session("user"))
<h1>Data of Session: {{ session("user") }}</h1>
<a href="logout">LogOut</a>
@elsle
<h1>No user Data</h1>
<a href="login">Login</a>
@endif