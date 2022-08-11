<h1>Add Member</h1>
<form action="add"  method="POST">
  @csrf
  <input type="text" name="name" placeholder="Enter Your Name"><br><br>
  <input type="email" name="email" placeholder="Enter Your Email"><br><br>
  <input type="text" name="city" placeholder="Enter Your City"><br><br>
  <button type="submit">Add Member</button>
</form>