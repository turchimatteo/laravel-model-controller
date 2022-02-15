<h1>Film in libreria</h1>
@foreach ($movies as $movie)
    <section>
        <h3>Nome: {{ $movie->title }}</h3>
        <h3>Nome originale: {{ $movie->original_title }}</h3>
        <h3>Nazionalità: {{ $movie->nationality }}</h3>
        <h3>Anno di uscita: {{ $movie->date }}</h3>
        <h3>Voto: {{ $movie->vote }}</h3>
    </section>
@endforeach