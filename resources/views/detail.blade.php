<h3>{{ $detail['name'] }}</h3>

<div class="card" style="width: 18rem;">
    <img width="30" src="{{ $detail['sprites']['front_default'] }}" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">{{$description }}.</p>
    </div>
</div>

<ul class="list-group list-group-flush">
    <li class="list-group-item">Base experience: {{ $detail['base_experience'] }}</li>
    <li class="list-group-item">Specie: {{ $detail['species']['name'] }}</li>
    <li class="list-group-item">Height: {{ $detail['height'] }}</li>
    <li class="list-group-item">Weight: {{ $detail['weight'] }}</li>
    <li class="list-group-item">Order: {{ $detail['order'] }}</li>
</ul>
