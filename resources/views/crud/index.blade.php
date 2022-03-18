<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Index</title>
</head>

<body>
    <div class="container mr-auto ml-auto w-80">
    <h1 class="mt-5 mb-5">Student Form With Image</h1>  
    @if(session('status'))
                <h6 class="alert alert success">{{session('status')}}</h6>
            @endif
    <form action="add" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label>Student Name</label>
                <input type="text" class="form-control" name="sname" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label>Student Email</label>
                <input type="email" class="form-control" name="semail" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label>Father Name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter father name">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="saddress" placeholder="Enter Address">
            </div>

            <div class="form-group">
                <label>Degree</label>
                <input type="text" class="form-control" name="sdegree" placeholder="Enter Degree">
            </div>

            <div class="form-group">
                <label>Skill</label>
                <input type="text" class="form-control" name="skill" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label>Student Image</label>
                <input type="file" class="form-control" name="img" placeholder="Enter email">
            </div>
            
            <button class="btn btn-primary w-100">Submit</button>

        </form>

    </div>
</body>

</html>