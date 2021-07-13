<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Update Data</h1>
        <form action="/update/{{$posts->id}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for=""><b>Post Title</b></label>
                <input type="text" name="title" id="" class="form-control" value={{$posts->post_title}}>
            </div>

            <div class="mb-3">
                <label for=""><b>Post Author</b></label>
                <input type="text" name="author" id="" class="form-control" value={{$posts->post_author}}>
            </div>
<input type="submit" value="Update" name="update" class="btn btn-success">

        </form>
    </div>
</body>

</html>
