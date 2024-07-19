<!doctype html>
<html lang="en">
<head>
    @include('admin.layout.partials.head')
</head>
<body>
<div class="container">
    <header class="container-fluid">
        @include('admin.layout.partials.header')
    </header>
    <div class="container d-flex justify-content-center">
            @yield('content')
    </div>
</div>

</body>
</html>
