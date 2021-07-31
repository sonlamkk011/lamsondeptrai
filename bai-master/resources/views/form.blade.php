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
    <h1 class="text-center">Student Survey</h1>
    <form class="pt-4" action="" id="form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label >Student Name:</label>
                    <input type="text" class="form-control"  name="studentName">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label >Student Email:</label>
                    <input type="email" class="form-control"  name="studentEmail">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Student Phone:</label>
                    <input type="text" class="form-control" name="studentTelephone">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Feedback </label>
                    <input type="text" class="form-control" name="feedback">
                </div>
            </div>
        </div>
        <button class="btn btn-primary pt-4" id="submit">Submit</button>
    </form>
</div>
<script>
    $(document).ready(function (){
        $('#submit').click(function (){
            $.ajax({
                url : 'http://localhost:8000/api/create',
                method: 'put',
                dataType: 'text',
                data : $('#form').serialize(),
                success : function (res) {
                alert("Thêm mới  thành công"+ res);
                }   ,
                errors : function (error) {
                alert("Thêm mới  thất bại"+ error);
                }
                // error: function (error) {
                // **alert('error; ' + eval(error));**
                // }
            })
                alert("Thêm mới  thành công");

            window.open("/list");
            // window.location.replace("/list");
            // window.open("/list","_self");
        })

        }
    )
</script>
<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
</body>
</html>
