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

            <form class="delete" method="post" action="/post/{{$post->id}}/delete">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>

            <a href="#" class="del" data-id="{{$post->id}}">
                <button>new delete</button>
            </a>
            <form action="/post/{{$post->id}}/delete" method="post" id="form_{{$post->id}}" >
                {{ csrf_field() }}
                {{ method_field('delete') }}
            </form>

        </div>
        <br>
    @endforeach
    <script>
        const dels = document.getElementsByClassName('del');/*該当のクラス名を記述*/
        for(let i = 0; i < dels.length; i++){/*for文でDeleteボタンの繰り返し処理を作る*/
            dels[i].addEventListener('click', function(e){
                e.preventDefault();/*イベントに対するデフォルトの動作をキャンセルする*/
                const id = this.getAttribute('data-id');/*属性を取得する*/
                const form = document.getElementById('form_'+id);
                if(confirm( '本当に削除しますか？' )){
                    form.submit();
                }else{
                    return false;
                }
            });
        };
    </script>
</body>
</html>
