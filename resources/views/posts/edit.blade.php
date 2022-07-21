{{-- <form method="post" action="{{ route('posts.update', $post) }}">
    @csrf
    @method('patch')
    <div>
        <input type="text" name="content" value="{{ $post->content }}">
    </div>
    <input type="submit" value="更新">
</form> --}}
<a href="/">Top</a>
<a href="/posts/create">Create</a>
<h2>title:{{ $post->title }}</h2>
<form method="POST" action="{{ route('posts.update', $post) }}">
    @csrf
    @method('patch')
    <p>Title:<input type="text" name="title" value="{{ $post->title }}"></p>
    <p>Content:<textarea name="content" cols="30" rows="10">{{ $post->content }}</textarea ></p>
    <input type="submit" value="submit">
</form>