<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Exercicio 3</title>
</head>

<body>
    <div class="container mt-5">

        <h2 class="text-center mb-4">Calcular Multiplicação</h2>
        <form action="/respostaExer3" method="POST" class="border p-4 rounded">
            @CSRF
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="valor1" class="form-label">1º Número</label>
                    <input type="number" name="valor1" id="valor1" class="form-control" placeholder="Insera um Número" required>
                </div>
                <div class="col-md-4">
                    <label for="valor2" class="form-label">2º Número</label>
                    <input type="number" name="valor2" id="valor2" class="form-control" placeholder="Insera um Número" required>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success mt-2">Calcular</button>
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