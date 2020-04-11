<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('tambah-awal-style')
    @include('includes.style')
    @stack('tambah-akhir-style')
</head>
<body>
    
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

    @stack('tambah-awal-script')

    @include('includes.script')

    @stack('tambah-akhir-script')
</body>
</html>