<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center align-item-center">
       <div class="card" style="width: 25rem;">
            <div class="card-body">
                <div>
                    <h1>{{$todo->title}}<a href="/todos" class="py-1 px-2 "><button type="submit" class="btn btn-danger">Back</button></a></h1>
                    
                </div>
                <div>
                    <p>{{$todo->description}}</p>
                </div>
            </div>
       </div>
    </div>
</body>
</html>