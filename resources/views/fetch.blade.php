<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Record</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background: #007bff;
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f1f1;
        }

        th {
            font-size: 16px;
        }

        td {
            font-size: 14px;
        }
    </style>

</head>
<body>

    <h1>Student Record</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $stud)
            <tr>
                <td>{{ $stud->id }}</td>
                <td>{{ $stud->name }}</td>
                <td>{{ $stud->email }}</td>
                <td>{{ $stud->age }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>