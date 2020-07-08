<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Size</th>
                <th>Description</th>
            </tr>
            @foreach ($prodotti as $prodotto)
                <tr>
                    <td> {{ $prodotto->name }} </th>
                    <td> {{ $prodotto->price }} </th>
                    <td> {{ $prodotto->description }} </th>
                </tr>
            @endforeach
        </table>
        {{-- <div class="tab">
            <div class="section">
                <h1>Name</h1>
                <h1>size</h1>
                <h1>Colour</h1>
            </div>
            @foreach ($prodotti as $prodotto)
                <div class="section">
                    <p> {{ $prodotto->name }} </p>
                    <p> {{ $prodotto->price }} </p>
                    <p> {{ $prodotto->description }} </p>
                </div>
            @endforeach
        </div> --}}
    </body>
</html>
