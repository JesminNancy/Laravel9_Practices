<h1>User Login</h1>
<form action="user" method="POST">
  @csrf
  <input type="text" name="user" placeholder="Enter Your Name"><br><br>
  <input type="pass" name="password" placeholder="Enter Your Password"><br><br>
  <button type="submit">Login</button>
</form>