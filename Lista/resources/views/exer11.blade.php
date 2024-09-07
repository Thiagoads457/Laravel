<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Exercicio 11</title>
    
</head>

<body>
    <div class="container mt-5">
                    
    <h2 class="text-center mb-4">Calcular a Perímetro de um Círculo</h2>
        <form action="/respostaExer11" method="POST" class="border p-4 rounded">
            @CSRF
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="number" name="valor1" id="valor1" class="form-control" placeholder="Insira o Raio do Círculo " required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Calcular</button>
                </div>
            </div>
        </form>
    </div>
</body>


</html>