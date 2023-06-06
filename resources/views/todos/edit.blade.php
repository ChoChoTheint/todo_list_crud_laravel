<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
</head>
<body>
    <div class="text-center flex justify-center pt-10">
    <div class="w-1/3 border border-gray-600 rounded p-4">
        <h1>Update this todo list</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('todo.update',$todo->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="py-2">
                <input type="text" name="title" value="{{$todo->title}}">
            </div>
            <div class="py-2">
                <textarea name="description" id="" cols="20" rows="5" placeholder="Description">{{$todo->description}}</textarea>
           </div>
            <a href=""><button type="submit" class="btn btn-success">Update</button></a>
            <a href="/todos" class="py-1 px-2 "><button type="submit" class="btn btn-danger">Back</button></a>
        </form>
        
    </div>
    </div>
</body>
</html>