<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>View Records</title>
</head>
<body>

<div class="container mr-auto ml-auto w-80">
    <h1 class="mb-5 mt-5 text-center">Student Record</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <th>Student Name</th>
            <th>Email</th>
            <th>Father Name</th>
            <th>Address</th>
            <th>Degree</th>
            <th>Skill</th>
            <th>Image</th>
            <th>Actions</th>
        </thead>

        <tbody>
            @foreach($lisit as $view)
            <tr>
                <td>{{$view->name}}</td>
                <td>{{$view->emial}}</td>
                <td>{{$view->father_name}}</td>
                <td>{{$view->address}}</td>
                <td>{{$view->degree}}</td>
                <td>{{$view->skill}}</td>
                <td><img src="{{asset('uploads/students/'. $view->img)}}" style="border-radius:50%; width:80px; height:80px"alt=""></td>
                <td>
                    <a href="delete/{{$view->id}}" class="btn btn-danger">DELETE</a>
                    <a href="edit/{{$view->id}}" class="btn btn-primary">EDIT</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>