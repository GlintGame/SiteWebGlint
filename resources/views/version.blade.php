<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Version du jeu</title>
</head>
<body>
    <a href="{{ route('home') }}">retour à la homepage</a>
    <h1>{{ $version->name }}</h1>
    <h3>id : {{ $version->id }}</h3>
    <p>
        {{ $version->change_log }} <br>
        <a href="{{ $version->url }}">{{ $version->url }}</a>
    </p>

    @if (session('posted') == 'no')
        <div style="color: red">
            vous avez déja posté il y a moins de 5min, réessayez plus tard
        </div>
    @endif

    <form action="{{ route('addPost', ['version' => $version->name]) }}" method="POST">

        @csrf
        <label>
            nom : <br>
            <input type="text" name="given_name"> 
        </label>
        <br>
        <label>
            votre message : <br>
            <textarea name="content"></textarea> 
        </label>
        <br>
        <input type="submit" value="post">

    </form>

    @foreach ($version->posts as $post)
        <h3>
            {{ $post->given_name }}
            <em>{{ ($post->user == null) ? '(une loupiote anonyme)' : $post->user }}</em>
        </h3>
        <p>
            {{ $post->content }}
        </p>
    @endforeach
</body>
</html>