<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page not found</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: rgb(238, 215, 141);

            width: 100vw;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            font-family: 'Raleway', sans-serif;

            overflow: hidden;
        }

        h1{
            font-size: 5rem;
        }
        
        img{
            --x-light: 0;
            --y-light: 0;

            position: absolute;
            top: var(--y-light);
            left: var(--x-light);

            width: 6720px;
            height: 3780px;
        }
        
    </style>
</head>
<body>
    <img src="img/light.png" alt="">
    <h1>{{ $message }}</h1>

    <script>
        const img = document.querySelector('img');
        
        window.addEventListener('mousemove', (e) => {
            img.style.setProperty('--x-light',`${e.clientX - img.width/2}px`);
            img.style.setProperty('--y-light',`${e.clientY - img.height/2}px`);
        });
    </script>
</body>
</html>