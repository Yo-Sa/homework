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
        <table>
            <tr>
                <td>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </td>
                <td>
                    <form class="delete" method="post" action="{{ route('posts.destroy', $post) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
        </table>
    @endforeach
</body>
</html>
