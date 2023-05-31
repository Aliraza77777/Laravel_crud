<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div style="display:flex;height:100vh">
        <div style="margin:auto">
            <div class="card">
                <div class="card-body" style="background-color:rgb(154, 212, 208)">
                             <h3 style="color:green;" class="font-weight-bold" >Registeration Form</h3>
                              <form action="{{ url('students') }}"  method="post">
                                @csrf
                    <label style="color:green;">Name </label> <br>
                            <input type="text" placeholder="Enter Name e.g ALI RAZA" value="{{ @$student->name }}" name="name"> <br> <br>
                            <label  style="color:green"> Father Name</label> <br>
                            <input type="text" placeholder="Enter Father Name" name="father name"> <br> <br>
                            <label style="color:green"  >Email</label><br>
                            <input type="email" placeholder="Enter your Email" name="email"><br> <br>
                            <label  style="color:green"> password</label> <br>
                            <input type="password" placeholder="Enter your Password" name="password"> <br><br>
                        <button type="submit" class="btn btn-outline-success">Add Data</button>
                    </form>
                </div>
              </div>
        </div>

    </div>
</body>

</html>
