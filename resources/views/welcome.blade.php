@extends('layouts.header')

@section('tilte', 'Página principal')

@section('content')
    <body>
        <div id="seach-container" class="col-md-12">
            <h1>Busque um evento ou produto</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procure">
            </form>
        </div>
        <div id="seach-container" class="col-md-12">
            <h2>Eventos/Produtos</h2>
            <p>Veja os eventos dos próximos dias</p>
            <div id="cards-container" class="row">
                @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="https://media-blog.keeperformaturas.com.br/wp-content/uploads/2019/07/O-que-observar-ao-visitar-uma-festa-de-formatura.jpg" alt="Evento">
                    <div class="card-body">
                        <p class="card-data">13/02/2023</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="#"><button>Saber mais</button></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div>
            <a href="/produtos"><button>Produtos</button></a>
            <a href="/contato"><button>Contato</button></a>
        </div>
        
            
    </body>
</html>
@endsection
