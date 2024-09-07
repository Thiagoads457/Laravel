<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Exercício 17</title>
</head>
<body>
    <div class="container mt-5">

    <h2 class="text-center mb-4">Calcular Juros Simples</h2>
        <form action="/respostaExer6" method="POST" class="border p-4 rounded">
            @CSRF
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="valor1" class="form-label">Capital</label>
                    <input type="number" name="valor1" id="valor1" class="form-control" placeholder="Informe o Capital required>
                </div>
                <div class="col-md-4">
                    <label for="valor2" class="form-label">Tx de Juros</label>
                    <input type="number" name="valor2" id="valor2" class="form-control" placeholder="Informe a Taxa de Juros" required>
                </div>
                <div class="col-md-4">
                    <label for="valor3" class="form-label"></label>
                    <input type="number" name="valor3" id="valor3" class="form-control" placeholder="Informe o Período" required>
                </div>
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