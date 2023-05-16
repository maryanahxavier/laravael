<!DOCTYPE html>
<html lang="ph-br">
<head>
    <meta charste= "UFT-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
</head>
<bory>
    <div class = "container">
        @component('sistema.navbar')
        @endcomponent 
        <main role ="main" class ="py-4">
            @hasSection ('content')
                @yield('content')
            @endif
       </main>
</div>
<div class = "container">
    <div class= "card-footer">
        <p class= "text-center py-4">"Maryanah" </p>
</div>
</div>
</bory>
</html>
