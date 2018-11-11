<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Document</title>
</head>
<body>
    <h1>La homepage de glint</h1>
    <ul>
        @foreach ($versions as $version)
            <li>
                <a href="{{ route('addPost', ['version' => $version->name]) }}">{{ $version->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>