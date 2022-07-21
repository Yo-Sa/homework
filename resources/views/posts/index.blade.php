<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample</title>
</head>
<body>
    <a href="/">Top</a>
    <a href="/posts/create">Create</a>
    <h1>Pages#index</h1>
    @foreach($posts as $post)
        <div style="display: inline-flex">
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            <form method="POST" action="{{ route('posts.edit', $post) }}">
                @csrf
                @method('get')
                <input type="submit" value="edit">
            </form>

            <form class="delete" method="post" action="{{ route('posts.destroy', $post) }}">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
        </div>
        <br>
    @endforeach
</body>
</html>
