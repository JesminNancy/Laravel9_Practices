<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API FETCH</title>
</head>
<body>
    <h1>Get API</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Email</td>
            <td>First_Name</td>
            <td>Last_Name</td>
            <td>Profile_Pic</td>
        </tr>

        @foreach ($data as $data)
            <tr>
                <td>{{ $data['id'] }}</td>
                <td>{{ $data['email'] }}</td>
                <td>{{ $data['first_name'] }}</td>
                <td>{{ $data['last_name'] }}</td>
                <td><img src="{{ $data['avatar'] }}" alt="" /></td>
            </tr>
        @endforeach
    </table>

</body>
</html>