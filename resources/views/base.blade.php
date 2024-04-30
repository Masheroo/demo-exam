<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $page_title }}</title>
</head>
<body>
    @include('header')

    <div class="content">
        @yield('content')
    </div>
</body>
</html>