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
    <div class="container text-center text-align-center">
       
        <div class="d-flex justify-content-center">
                <h1>What next you need To_Do</h1>
                <a href="/todos" class="py-2 px-2"><button type="submit" class="btn btn-danger">Back</button></a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="/todos/create" method="post">
            @csrf
            <div class="py-2">
                <input type="text" name="title" placeholder="Title">
            </div>
           <div class="py-2">
                <textarea name="description" id="" cols="20" rows="5" placeholder="Description"></textarea>
           </div>
           <div class="py-2">
                <a href=""><button type="submit" class="btn btn-success">Create</button></a>
           </div>
        </form>
    </div>
</body>
</html>