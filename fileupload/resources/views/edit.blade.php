<h1>Update Member</h1>
<form action="/edit" method="POST">
  @csrf
  <input type="hidden" name="id" value="{{ $data->id }}">
  <input type="text" name="name" value="{{ $data->name }}"><br><br>
  <input type="email" name="email" value="{{ $data->email }}"><br><br>
  <input type="text" name="city" value="{{ $data->city }}"><br><br>
  <button type="submit">Update</button>
</form>