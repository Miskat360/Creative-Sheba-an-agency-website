<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-black text-white">
    <header>
        <nav class="flex items-center lg:gap-20 gap-14 lg:px-10 sm:px-5 py-4 bg-blue-800">
            <div class="text-4xl uppercase">logo</div>
            <div>
                <ul class="flex gap-5 capitalize font-medium">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li><a href="{{url('/about')}}">About</a></li>
                    <li><a href="{{url('/blog')}}">Blog</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="text-center text-4xl py-6">This is Contact Page</section>
    </main>
    <footer></footer>
</body>

</html>