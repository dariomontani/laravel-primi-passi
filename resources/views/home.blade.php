{{-- @php
    dd($name, $lastname, $birth)    
@endphp --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="{{ route('header')}}">INFO</a>
    </header>
    <main>
        <h1>HELLO WORLD</h1>
        <ul>
            <li>nome: {{$name}}</li>
            <li>cognome: {{$lastname}}</li>
            <li>data di nascita: {{$birth}}</li>
        </ul>
    </main>
</body>
</html>