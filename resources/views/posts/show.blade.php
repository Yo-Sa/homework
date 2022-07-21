<a href="/">Top</a>

<br>
@if (session('message'))
    {{ session('message') }}
@endif
<br>
<h3>Title:</h3>{{ $post->title }}
<br>
<h3>Content:</h3>{{ $post->content }} 