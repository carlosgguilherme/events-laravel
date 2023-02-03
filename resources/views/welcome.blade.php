@extends('layouts.header')

@section('tilte', 'Página principal')

@section('content')
    <body>
        <h1>Bla nla bla</h1>
 
        @if ( $idade  > 15)
        <p>Meu nome é {{$nome}}, tenho {{$idade}} anos e trabalho sendo {{$profissao}}</p>
        
        @endif
        <a href="/produtos"><button>Produtos</button></a>
        <a href="/contato"><button>Contato</button></a>
            
    </body>
</html>
@endsection
