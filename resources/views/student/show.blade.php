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
                Group
            </th>
            <th>
                Name
            </th>
            <th>
                Surname
            </th>
            <th>
                Created At
            </th>
            <th>
                Updated At
            </th>
        </tr>
        <tr>
            <td>
                {{ $student->id }}
            </td>
            <td>
                {{ $student->group_id }}
            </td>
            <td>
                {{ $student->name }}
            </td>
            <td>
                {{ $student->surname }}
            </td>
            <td>
                {{ $student->created_at }}
            </td>
            <td>
                {{ $student->updated_at }}
            </td>
        </tr>
    </table>
</body>
</html>