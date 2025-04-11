<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dataForm" method="post">
        @csrf
        <input type="text" name="name">
        @error("name")
        {{ $message }}
        @enderror
        <br>
        <input type="submit" name="btn">
    </form>
</body>
</html>