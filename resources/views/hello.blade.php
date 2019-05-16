<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {!! SEO::generate() !!}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trans</title>

</head>
<body>
    <h1>{{ __('index.hello',['name' => Auth::user()->name]) }}</h1>
    {{ __('I love programming') }}
</body>
</html>