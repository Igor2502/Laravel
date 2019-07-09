<html>
    <head>
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    </head>

    <body>        
        @component('components.meucomponente', ['tipo'=>'primary',
        'titulo'=>'Erro Fatal'])
            <strong>Erro: </strong>Sua mensagem de erro.
            <!--
            @slot('titulo')
                Erro Fatal
            @endslot
            -->
        @endcomponent

        @alerta(['tipo'=>'warning', 'titulo'=>'Erro Fatal'])
            <strong>Erro: </strong>Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'danger', 'titulo'=>'Erro Fatal'])
            <strong>Erro: </strong>Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'info', 'titulo'=>'Erro Fatal'])
            <strong>Erro: </strong>Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'success', 'titulo'=>'Erro Fatal'])
            <strong>Erro: </strong>Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'secondary', 'titulo'=>'Erro Fatal'])
            <strong>Erro: </strong>Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'dark', 'titulo'=>'Erro Fatal'])
            <strong>Erro: </strong>Sua mensagem de erro.
        @endalerta


        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>