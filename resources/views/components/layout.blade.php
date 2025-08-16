<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

    @vite('resources/css/app.css')
</head>

<body>

    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif
    <header>
        <nav class="navbar">
            <div class="navbar-title">Post Blog</div>
            <div class="navbar-link">
                <a href="{{ route('posts.index') }}">All Posts</a>
                <a href="{{ route('posts.create') }}">Create New Post</a>
            </div>    
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>

</html>