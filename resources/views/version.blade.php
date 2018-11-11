<!DOCTYPE html>
<html lang="en">
<head>
    <title>Version du jeu</title>
</head>
<body>
    <h1>{{ $version->name }}</h1>
    <h3>id : {{ $version->id }}</h3>
    <p>
        <a href="{{ $version->url }}">{{ $version->url }}</a>
    </p>

    @if (session('posted') == 'no')
        <div style="color: red">
            vous avez déja posté il y a moins de 5min, réessayez plus tard
        </div>
    @endif

    <form action="{{ route('addPost', ['version' => $version->name]) }}" method="POST">

        @csrf
        <input type="text" name="content">
        <input type="submit" value="post">

    </form>

    @foreach ($version->posts as $post)
        <h3>{{ ($post->user == null) ? 'une loupiote anonyme' : $post->user }}</h3>
        <p>
            {{ $post->content }}
        </p>
    @endforeach
</body>
</html>