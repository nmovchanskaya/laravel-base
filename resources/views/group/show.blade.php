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
    </table>
    <p>
        Students:
    </p>
    <ul>
        @foreach ($group->students as $student)
            <li>{{$student->surname}} {{$student->name}}</li>
        @endforeach
    </ul>
    <a href="/groups/{{ $group->id }}/students/create">Create new student</a>
</body>
</html>