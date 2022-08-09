<h1>Add New Member</h1>
@if(session('username'))
<h3>Data save for {{ session('username') }}</h3>
@endif 
 <form action="storem" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter Your Name" /><br/><br/>
    <input type="email" name="email" placeholder="Enter Your email" /><br/><br/>
    <input type="text" name="password" placeholder="Enter Your password" /><br/><br/>
    <button type="submit">Add User</button>
</form> 