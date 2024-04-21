<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/groups/{{ $group_id }}/students" method="post">
        @csrf
        <div>
            <label for="input-name">Name:</label>
            <input type="text" name="name" id="input-name" />
        </div>
        <div>
            <label for="input-surname">Surname:</label>
            <input type="text" name="surname" id="input-surname" />
        </div>
        <input type="hidden" name="group_id" value="{{ $group_id }}">
        <div>
            <input type="submit" value="Create" />
        </div>
    </form>
</body>
</html>