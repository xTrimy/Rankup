<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(Session::has('success'))
        {{ Session::get('success') }}
    @endif
    <h1>Devices</h1> 
    <a href="{{ route('admin.devices.create') }}">Create</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
                <tr>
                    <td>{{ $device->id }}</td>
                    <td>{{ $device->name }}</td>
                    <td>
                        <a href="{{ route('admin.devices.show', $device->id) }}">Show</a>
                        <a href="{{ route('admin.devices.edit', $device->id) }}">Edit</a>
                        <form action="{{ route('admin.devices.destroy', $device->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>