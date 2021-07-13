<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <table class="table table bordered shadow text-center table-striped">
            <tr>
                <th>Post ID</th>
                <th>Post Title</th>
                <th>Post Author</th>
                <th>Post Delete</th>
                <th>Post Edit</th>

            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->post_title }}</td>
                    <td>{{ $post->post_author }}</td>
                    <td><a href="/delete/{{ $post->id }}" class="btn btn-danger">Delete</a></td>
                    <td><a href="/edit/{{ $post->id }}" class="btn btn-success">Edit</a></td>

                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
