<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Laravel & VueJS CRUD</title>

    
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <!-- production version, optimized for size and speed -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.0/vue-resource.js"></script>
</head>
<body>
    <div id="app" class="container">
        <example-component></example-component>
        <br />
        <button-counter></button-counter>
    </div>

    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>