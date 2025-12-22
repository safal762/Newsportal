<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <header class="bg-amber-300 p-5 text-1xl uppercase">
        <nav class="flex justify-between">
          <div class="left">
            <ul class="flex gap-2">
                
                <a href="/"><li>home</li></a>
                   @foreach ($cat as $item)
       <a href="/"><li>{{ $item->title }}</li></a>
    @endforeach
            </ul>

        </div>
        <div class="right">
            <li>hello</li>
            </div>  
        </nav>
    </header>
</body>
</html>