@extends('plantilla')

@section('section')

<h1>Este en mi equipo de trabajo</h1>

@foreach($equipo as $persona)
    <a href="{{  route('nos', $persona)  }}" class="h4 table-danger"> {{$persona}}</a><br>
@endforeach
 
    @if(!empty($nombre))

        @switch($nombre)

            @case($nombre == 'Ignacio')
            <h2>El nombre es {{ $nombre }}</h2>
            <p> {{ $nombre }} es Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, animi eaque reprehenderit repellat aliquid officiis esse! Dolorum vitae hic, ipsum tenetur voluptatem, quisquam deserunt quidem, maiores expedita aliquid atque ex.</p>
            @break

            @case($nombre == 'Juanito')
            <h2>El nombre es {{ $nombre }}</h2>
            <p> {{ $nombre }} es Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, animi eaque reprehenderit repellat aliquid officiis esse! Dolorum vitae hic, ipsum tenetur voluptatem, quisquam deserunt quidem, maiores expedita aliquid atque ex.</p>
            @break

            @case($nombre == 'Pedrito')
            <h2>El nombre es {{ $nombre }}</h2>
            <p> {{ $nombre }} es Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, animi eaque reprehenderit repellat aliquid officiis esse! Dolorum vitae hic, ipsum tenetur voluptatem, quisquam deserunt quidem, maiores expedita aliquid atque ex.</p>
            @break
        @endswitch
    @endif

@endsection('section')
