<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>
                    {{ $student->id }}
                </td>
                <td>
                    {{ $student->name }}
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>