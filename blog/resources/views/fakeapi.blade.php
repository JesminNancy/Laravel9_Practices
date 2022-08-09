<h1>Fetch API</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Body</td>
    </tr>

    @foreach ($data as $data)
        <tr>
            <td>{{ $data['id'] }}</td>
            <td>{{ $data['title'] }}</td>
            <td>{{ $data['body'] }}</td>
        </tr>
    @endforeach
</table>