<!DOCTYPE html>
<html>
<head>
    <title>Comandos del Sistema</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<h1>Ejecutar Comandos del Sistema</h1>
<button id="open-explorer">Abrir Explorador</button>
<button id="open-browser">Abrir Navegador</button>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#open-explorer').click(function() {
            $.ajax({
                url: '/open-explorer',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert('Explorador abierto');
                },
                error: function(error) {
                    alert('Error al abrir el Explorador');
                }
            });
        });

        $('#open-browser').click(function() {
            $.ajax({
                url: '/open-browser',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert('Navegador abierto');
                },
                error: function(error) {
                    alert('Error al abrir el Navegador');
                }
            });
        });
    });
</script>
</body>
</html>
