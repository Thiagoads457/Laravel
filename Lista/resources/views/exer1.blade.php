<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Exercício 1</title>
</head>
<body>
<div class="container mt-5">

<h2 class="text-center mb-4">Calcular Adição</h2>
    <form action="/respostaExer1" method="POST" class="border p-4 rounded">
        @CSRF
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="valor1" class="form-label">1º Número</label>
                <input type="number" name="valor1" id="valor1" class="form-control" placeholder="Inserir Número" required>
            </div>
            <div class="col-md-4">
                <label for="valor2" class="form-label">2º Número</label>
                <input type="number" name="valor2" id="valor2" class="form-control" placeholder="Inserir Número" required>
            
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success mt-2">Calcular</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>