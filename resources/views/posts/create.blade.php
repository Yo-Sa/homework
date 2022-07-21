<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <a href="/">Top</a>
    <a href="/posts/create">Create</a>
    <h1>Create a new post</h1>
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <p>Title:<input type="text" name="title"></p>
        <p>Content:<textarea name="content" cols="30" rows="10"></textarea ></p>
        <input type="submit" value="submit">
    </form>
</body>
</html>