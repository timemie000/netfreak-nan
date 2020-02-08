<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Netfreak</title>

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

            .flex-center {
                align-items: center;
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

            .anime-backward {
              position: relative;
              display: inline-block;
              -webkit-animation: move-backward 4s infinite; /* Safari 4.0 - 8.0 */
              animation: move-backward 4s infinite;
            }

            /* Safari 4.0 - 8.0 */
            @-webkit-keyframes move-backward {
              0%   { left:0px;}
              25%  { left:20px;}
              50%  { left:0px;}
              75%  { left:20px;}
              100% { left:0px;}
            }

            /* Standard syntax */
            @keyframes move-backward {
              0%   { left:0px;}
              25%  { left:20px;}
              50%  { left:0px;}
              75%  { left:20px;}
              100% { left:0px;}
            }

            .anime-forward {
              position: relative;
              display: inline-block;
              -webkit-animation: move-forward 4s infinite; /* Safari 4.0 - 8.0 */
              animation: move-forward 4s infinite;
            }

            /* Safari 4.0 - 8.0 */
            @-webkit-keyframes move-forward {
              0%   { left:0px;}
              25%  { left:-20px;}
              50%  { left:0px;}
              75%  { left:-20px;}
              100% { left:0px;}
            }

            /* Standard syntax */
            @keyframes move-forward {
              0%   { left:0px;}
              25%  { left:-20px;}
              50%  { left:0px;}
              75%  { left:-20px;}
              100% { left:0px;}
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Netfreak
                </div>
                <p>Netflix, a video app made by <i>freaks</i></p>
                <div class="links m-b-md">
                    <p class="anime-backward">👉</p>
                    <a href="{{ route('series') }}">Start watching Here</a>
                    <p class="anime-forward">👈</p>
                </div>
                <small
                  style="padding: 0px 10px 0px 10px; font-size: 22px; color: #E67E22; border-style: solid; border-radius: 25px;">
                  Nan edition
                </small>
            </div>
        </div>
    </body>
</html>
