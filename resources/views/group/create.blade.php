<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/groups" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title"/>
        <input type="submit" value="Create"  />
    </form>
</body>
</html>