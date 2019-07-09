<html>
    <head>
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    </head>

    <body>        
       
        @if(isset($produtos))

            @if(count($produtos) == 0)
                <h1>Nenhum produto</h1>
            @elseif(count($produtos) === 1)
                <h1>Um produtos</h1>
            @else
                <h1>Temos varios produtos</h1>
            @endif

            @foreach($produtos as $p)
                <p>Nome: {{$p}}</p>
            @endforeach
            
        @else
            <h2>Variavel produtos não foi passada como parametro.</h2>
        @endif

        @empty($produtos)
            <h2>Nada em produtos</h2>
        @endempty

        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>