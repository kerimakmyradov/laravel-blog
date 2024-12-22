<h1>About</h1>
<p>This is a blog about Laravel</p>
<p>{{ implode(', ', $tags) }}</p>
@foreach ($team as $person)
    <p>{{ $person['name'] }} - {{ $person['position'] }}</p>
@endforeach
