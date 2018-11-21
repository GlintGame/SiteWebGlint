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
            
            width: 100vw;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: flex-end;

            font-family: 'Raleway', sans-serif;

            overflow: hidden;

            background-position: center;
            background-size: contain;
            background-color: rgb(238, 215, 141);
            background-repeat: no-repeat;
            background-image: url('img/{{ $background }}.png');

            box-shadow: inset 0px 5px 13px 0px rgba(0,0,0,0.45);
        }

        h1{
            font-size: 4rem;
            text-align: center;
            /* background-color: rgba(255, 255, 255, 0.45);
            padding: 0.5rem 2rem; */
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

        @media (max-width: 1000px){
            h1 {
                font-size: 3.2rem;
            }
        }

        @media (max-width: 800px){
            h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 400px){
            img {
                display: none;
            }
        }
        
    </style>
</head>
<body>
    <img src="img/light.svg" alt="">
    <h1>{{ $message }}</h1>

    <script>
        if (window.innerWidth > 400) 
        {
            const img = document.querySelector('img');

            window.addEventListener('mousemove', (e) => {
                img.style.setProperty('--x-light',`${e.clientX - img.width/2}px`);
                img.style.setProperty('--y-light',`${e.clientY - img.height/2}px`);
            });
        }
    </script>
</body>
</html>