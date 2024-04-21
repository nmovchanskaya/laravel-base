<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/groups/create">Create new group</a>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Title
            </th>
            <th>
                Start Date
            </th>
            <th>
                Active
            </th>
            <th>
                Created At
            </th>
            <th>
                Updated At
            </th>
        </tr>
        @foreach ($groups as $group)
            <tr>
                <td>
                    {{ $group->id }}
                </td>
                <td>
                    {{ $group->title }}
                </td>
                <td>
                    {{ $group->start_from }}
                </td>
                <td>
                    {{ $group->is_active }}
                </td>
                <td>
                    {{ $group->created_at }}
                </td>
                <td>
                    {{ $group->updated_at }}
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>