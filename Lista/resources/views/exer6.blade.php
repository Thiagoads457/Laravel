<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercicio 6</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Converter Temperatura</h2>
        <form action="/respostaExer6" method="POST" class="border p-4 rounded">
            @csrf 
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="number" name="celsius" id="celsius" class="form-control" placeholder="Temperatura em Celsius" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Converter</button>
                </div>
            </div>
        </form>
    </div>

    @if(session('resultado'))
<script>
    alert('{{ session('resultado') }}');
</script>
@endif

</body>

</html>
