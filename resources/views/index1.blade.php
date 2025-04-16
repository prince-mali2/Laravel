<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>password</td>
        </tr>
        @forEach($data as $d)
        <tr>
            <td>{{ $d->name }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->password }}</td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>