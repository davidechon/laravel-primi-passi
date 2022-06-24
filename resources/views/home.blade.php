<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Laravel Primi Passi</title>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

     <!-- Styles -->
     <style>
         *{
             margin: 0 auto;
             padding: 0;
             box-sizing: border-box;
         }
         html, body {
             background-color: #252525;
             color: #f4f3ef;
             font-family: 'Nunito', sans-serif;
             font-weight: 200;
             height: 100vh;
         }

         .container-fluid {
             height: 100vh;
             align-items: center;
             display: flex;
             justify-content: center;
         }
         .content {
             width: 90%;
             height: 80vh;
             margin: 0 auto;
             position: relative;
             text-align: center;
         }

         .middle-bar {
             width: 100%;
             position: absolute;
             top: 40%;
             left: 50%;
             padding: 10px;
             transform: translate(-50%, -50%);
             border: 10px double rgba(238,209,173,0.42);
             border-radius: 5px;
         }
         .bottom-bar {
             width: 100%;
             position: absolute;
             bottom: 0;
             padding: 10px;
             border: 10px groove rgba(238,209,173,0.42);
             border-radius: 5px;
         }
         .title {
             font-size: 84px;
         }
         .sub-title {
             font-size: 24px;
         }
         .bottom-sub-title {
             font-size: 20px;
         }
         .links{
             height: 100px;
             margin: 0 auto;
         }

         .links > li {
             list-style-type: none;
             display: inline;
             color: #636b6f;
             line-height: 100px;
             vertical-align: middle;
             margin: 50px;
             padding: 25px;
             font-size: 18px;
             font-weight: 600;
             letter-spacing: .1rem;
             text-decoration: none;
             text-transform: uppercase;
         }
         a{
            padding: 20px;
            text-decoration: none;
            color: #eed1ad;
            border: 1px solid transparent;
         }
         a:hover{
            padding: 20px;
            text-decoration: none;
            color: #636b6f;
            background-color: #eed1ad;
            border-radius: 5px;
            border: 1px solid #eed1ad;
            /* overflow: hidden; */
         }
     </style>
</head>

<body>
    <main class="container-fluid">
        <div class="content">
            <h1 class="title">Hello World!</h1>
            <div class="middle-bar">
                <h3 class="sub-title">Collegamenti diretti</h3>
                <ul class="links">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('portfolio')}}">Porfolio</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div> {{-- middle-bar --}}
            <div class="bottom-bar">
                <h3 class="bottom-sub-title">Collegamenti ciclati</h3>
                <ul class="links">
                    @foreach ($links as $link)
                        <li><a href="{{route($link)}}">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div> {{-- bottom-bar --}}
        </div> {{-- content --}}
    </main>
    
</body>
</html>