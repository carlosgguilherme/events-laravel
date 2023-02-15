@extends('layouts.header')

@section('tilte', 'Criando eventos')

@section('content')

    <body>
        <div id="event-create-container" class="col-md-6 offset-md-3">
            <h1>Venda seu produto</h1>
            <form action="{{route('product.store')}}" method="post">
                <div class="form-group">
                    <label for="title">Nome do produto:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titulo do produto">
                </div>
            </form>    
        </div>  
    </body>
</html>
@endsection
