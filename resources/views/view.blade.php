<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Father_name</th>
            <th scope="col">email</th>
            <th scope="col">password</th>

          </tr>
        </thead>
        <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->father_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->password }}</td>
                            <td>
                                <form method="post" action="{{ url('students') }}/{{ $student->id }}" >
                                    @csrf
                                    @method('delete')
                                    <button type="submit"> Delete</button>
                                </form>
                            </td>
                             <td> <a href="{{ route('students.edit',[$student->id]) }}"><button>edit</button></a></td>
                        </tr>
                        @endforeach
        </tbody>
      </table>
</body>

</html>
