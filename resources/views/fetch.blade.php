<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Record</title>

    <style>
        body{
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        h1{
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        table{
            width: 85%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        thead{
            background-color: #007bff;
            color: white;
        }

        th{
            padding: 15px;
            font-size: 16px;
        }

        td{
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        tr:hover{
            background-color: #f1f1f1;
        }

        .edit-btn{
            background-color: #28a745;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }

        .edit-btn:hover{
            background-color: #218838;
        }

        a{
            text-decoration: none;
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
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $stud)
            <tr>
                <td>{{ $stud->id }}</td>
                <td>{{ $stud->name }}</td>
                <td>{{ $stud->email }}</td>
                <td>{{ $stud->age }}</td>

                <td>
                    <a href="{{ route('edit.student', $stud->id) }}">
                        <button class="edit-btn">Edit</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>