<h1>Member List</h1>
<table border="1">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>City</td>
    <td>Operation</td>
  </tr>
  @foreach ($members as $member)
      <tr>
        <td>{{ $member->id }}</td>
        <td>{{ $member->name }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->city }}</td>
        <td><a href="{{ 'delete/'.$member->id }}">Delete</a></td>
      </tr>
  @endforeach
</table>
{{-- <div>
  {{ $members->links() }}
</div>
<style>
  .w-5{
    display: none;
  }
</style> --}}