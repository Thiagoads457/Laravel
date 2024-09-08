<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Exercicio 14</title>

</head>

<body>
    <div class="container mt-5">

        <h2 class="text-center mb-4">Converter Quilômetros em Milhas</h2>
        <form action="/respostaExer14" method="POST" class="border p-4 rounded">
            @CSRF
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="number" name="valor1" id="valor1" class="form-control" placeholder="Insira o Valor em KM " required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Converter</button>
                </div>
            </div>
        </form>
        @if(session('resultado'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('resultado') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>