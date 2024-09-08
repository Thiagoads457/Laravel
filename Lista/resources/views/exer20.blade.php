<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Exercício 20</title>
</head>
<body>
<div class="container mt-5">

<h2 class="text-center mb-4">Calcular Velocidade Média</h2>
    <form action="/respostaExer20" method="POST" class="border p-4 rounded">
        @CSRF
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="valor1" class="form-label">Distância</label>
                <input type="number" name="valor1" id="valor1" class="form-control" placeholder="Informe a Distância" required>
            </div>
            <div class="col-md-4">
                <label for="valor2" class="form-label">Tempo</label>
                <input type="number" name="valor2" id="valor2" class="form-control" placeholder="Informe o Tempo" required>
            
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