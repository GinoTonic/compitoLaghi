<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="">
    <h1>Compito Giovanni Laghi</h1>
</header>
<div class="form p-20 w-full m-20">
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="title">Titolo</label>
        <input class="w-full" type="text" id="title" name="title" placeholder="Titolo post"><br><br>
        <label for="description">Post</label>
        <input class="w-full" type="text" id="description" name="description" placeholder="Scrivi qui il tuo post"><br><br>
        <input class="button" type="submit" value="Submit">
    </form>
</div>
<div>
    <table class="p-20 w-full m-20">
        <caption class="caption">Lista posts</caption>
        @foreach($posts as $post)
            <tr id="post">
                <td class="p-20" >
                    <div class="tit">{{$post->title}}</div>
                    <div class="desc">{{$post->description}}</div>
                    <button class="button delete" onclick="remove()">Elimina</button>
                </td>
                <td>

                </td>

            </tr>
        @endforeach
    </table>
</div>
</body>
<script>
    function remove(){

        let post=document.getElementById('post');
        post.remove();
    }

</script>
</html>
