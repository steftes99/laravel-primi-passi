<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-top {
                /* align-items: center; */
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .description {
                width: 80%;
                margin: 10rem auto 0;
            }
            .lista-contatti{
                list-style: none;
                line-height: 2rem;
            }
        </style>
    </head>
    <body>
        <div class="flex-top position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Stefano Tescione
                </div>

                <div class="links">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('about')}}">About</a>
                    <a href="{{route('contacts')}}">Contatti</a>
                    <a href="https://github.com/steftes99" target="_blank">GitHub</a>
                </div>

                <div class="description content">
                    <h2>{{$title}}</h2>
                    <ul class="lista-contatti">
                        @foreach ($contacts as $key => $contact)
                            <li>{{$key}} = {{$contact}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>