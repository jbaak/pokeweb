<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokemon</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="overlay-spinner d-none"></div>
        <div class="col-6">
            <h2>Pokemons</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $pokemon)
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $pokemon['name'] }}</td>
                        <td><a data-id="{{ $pokemon['id'] }}" class="btn btn-info view-detail" href="">Ver detalle</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-6">
            <h2>Detalle</h2>
            <div id="pokemon-detail">

            </div>
        </div>
    </div>
</div>



</body>

</html>
