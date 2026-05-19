<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .form-box{
            width: 400px;
            background: white;
            margin: 60px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1{
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label{
            font-size: 16px;
            font-weight: bold;
            color: #555;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input:focus{
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0,123,255,0.3);
        }

        button{
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover{
            background-color: #0056b3;
        }
    </style>

</head>
<body>

    <div class="form-box">

        <h1>Update Form</h1>

        <form action="{{ route('update.student', $student->id) }}" method="post">
            @csrf

            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name" value="{{$student->name}}">

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" value="{{$student->email}}">

            <label>Age</label>
            <input type="number" min="1" name="age" placeholder="Enter your age" value="{{$student->age}}">

            <button type="submit">Update</button>
        </form>

    </div>

</body>
</html>