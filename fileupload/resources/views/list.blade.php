<h1>Member List</h1>
<table border="1">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>City</td>
  </tr>
  @foreach ($member as $member)
      <tr>
        <td>{{ $member->id }}</td>
        <td>{{ $member->name }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->city }}</td>
      </tr>
  @endforeach
</table>