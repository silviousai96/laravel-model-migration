<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    <title>Travel Agency</title>
</head>
<body>
    <h1>Agenzia di viaggi</h1>

    <ul>
        @foreach ($travels as $travel)
            <li>
                <div> <span>Destinazione:</span> {{ $travel->destinazione }}</div> 

                <div> <span>Struttura:</span>  {{ $travel->struttura }}</div>

                <div> <span>Partenza:</span>  {{ $travel->partenza }}</div> 

                <div> <span>Durata:</span>  {{ $travel->durata }}</div> 

                <div> <span>Prezzo:</span> €{{ $travel->prezzo }}</div>

                <div> <span>Descrizione:</span> {{ $travel->descrizione }}</div>
            </li>
        @endforeach
    </ul>
</body>
</html>