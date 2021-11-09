@foreach ($movies as $item)
    <div class="card">
        <span class="title">Titolo: {{ $item['title'] }}</span>
        <span>Titolo originale: {{ $item['original_title']}}</span>
        <span>Nazionalità: {{ $item['nationality'] }}</span>
        <span>Data di uscita: {{ $item['date'] }}</span>
        <span>Voto: {{ $item['vote'] }}</span>
    </div>
@endforeach
