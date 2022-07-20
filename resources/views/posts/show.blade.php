<a href="/">Top</a>
<a href="/posts/create">Create</a>
<br>
@if (session('message'))
        {{ session('message') }}
@endif

{{ $post->title }}
{{ $post->content }} 