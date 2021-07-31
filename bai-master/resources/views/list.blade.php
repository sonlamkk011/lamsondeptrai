<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Student</h1>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Student Phone</th>
            <th>Feedback</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->studentName}}</td>
                <td>{{$student->studentEmail}}</td>
                <td>{{$student->studentTelephone}}</td>
                <td>{{$student->feedback}}</td>
                <td>
                    <a href="/edit/{{$student->id}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="/delete/{{$student->id}}" onclick="return confirm('bạn chắc chắn muốn xóa chứ?')">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
