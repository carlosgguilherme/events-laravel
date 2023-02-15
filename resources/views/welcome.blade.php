@extends('layouts.header')

@section('tilte', 'Página principal')

@section('content')

    <body>
        <div id="search-container" class="col-md-12">
            <h1>Busque um produto</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procure">
            </form>
        </div>
        <div id="events-container" class="col-md-12">
            <h2>Produtos</h2>
            <p class="subtitle">Veja os produtos do dia</p>
            <div id="cards-container" class="row">
                @foreach ($events as $event)
                    <div class="card col-md-3">
                        <img src="https://m.media-amazon.com/images/I/71s9BjamD+L._AC_SL1500_.jpg"
                            alt="Evento">
                        <div class="card-body">
                            <p class="card-date">13/02/2023</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-participants">X Unidades vendidas</p>
                            <p>{{$event->price}}</p>
                            <a href="#"><button>Saber mais</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
      

    </body>

    </html>
@endsection
