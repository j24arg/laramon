@extends ("Template.basic")
@section('content')
<section class="content">
<section class="tarjeta">

<a href="{{ route('pokemon.uno',['pokemon' => $poke->id]) }}">
  <article class="poke {{ $tipo->name }}">
  <img src="{{ asset('poke-img/images/poke-'.$poke->id.'.jpg') }}" alt="Icono de {{ $poke->name }}">
    <h3>{{ $poke->name }}</h3>
    <h4>{{ $poke->weight }}</h4>
    <h4>{{ $poke->height }}</h4>
    <h4>{{ $poke->evolves }}</h4>
  </article>
</a>

<form action="/pokemon/{{$poke->id}}" method="post">
  @csrf
  @method('delete')
  <button type="submit">Eliminar</button>
</form>

<a class='botona' href="/pokemon/{{ $poke->id }}/editar">Editar</a>

<a class='botona' href="/pokemon/">Ir atras</a>
</section>
</section>

@endsection