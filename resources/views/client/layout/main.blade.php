<!doctype html>
<html lang="en">
<head>
    @include("client.layout.head")
</head>
<body>
<header>
    @include("client.layout.header")
</header>
<main>
    <article class="py-3">
        @yield("content")
    </article>
</main>

<footer>
    @include("client.layout.footer")
</footer>
@include("client.layout.script")
</body>
</html>
