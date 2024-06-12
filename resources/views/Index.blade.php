<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>

    @vite('resources/css/app.scss')
</head>
<body>

@include('navbar')

{{-- Portfolio Content goes in here --}}
<main>
    @include('portfolio.about-me')
    @include('portfolio.projects')
    @include('portfolio.contact')
</main>

@include('portfolio.footer')
</body>
</html>
