<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud - @yield('title')</title>
</head>
<style>
    .d-none{
        display: none
    }
</style>
<body>
    <header>
        <p>crud</p>

        <nav>
            <ul>
                <li><a href="{{route('activity.index')}}">Home</a></li>
                <li><a href="{{route('activity.create')}}">Create</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="d-none" id="msg">

        </div>
        <div>
            @yield('content')
        </div>
    </main>

    <script src="http://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="{{asset('/js/ajax.js')}}"></script>
</body>
</html>
