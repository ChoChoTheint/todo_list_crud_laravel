<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center col-md-6">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>All Your Todos</h1>
            @foreach($todos as $todo)
                <div class="d-flex justify-content-around">
                    <table>
                        <tr>
                            <td><a class="cursor-pointer" href="{{route('todo.show',$todo->id)}}">{{$todo->title}}</a></td>
                            <td><a href="{{'/todos/'.$todo->id.'/edit'}}" class="py-2 px-2"><button class="btn btn-primary">Edit</button></a></td>
                            <td><a href="{{'/todos/'.$todo->id.'/delete'}}" class="py-2 px-2"><button class="btn btn-danger">Delete</button></a></td>
                            <td><a href="{{route('todo.create')}}" class="py-2 px-2"><button class="btn btn-success">Create New</button></a></td>
                        </tr>
                    </table>
                </div>
            @endforeach
            
    </div>
</body>
</html>