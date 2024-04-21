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
        <input type="text" name="name" />
        <input type="text" name="surname" />
        <input type="hidden" name="group_id" value="{{ $group_id }}">
        <input type="submit" value="Create"  />
    </form>
</body>
</html>