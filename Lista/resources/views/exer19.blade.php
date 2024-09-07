<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Exercicio 19</title>
    
</head>

<body>
    <div class="container mt-5">
                    
    <h2 class="text-center mb-4">Converter Dias em Horas, Minutos, Segundos </h2>
        <form action="/respostaExer19" method="POST" class="border p-4 rounded">
            @CSRF
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="number" name="valor1" id="valor1" class="form-control" placeholder="Insira o valor em Dias " required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Converter</button>
                </div>
            </div>
        </form>
    </div>
</body>


</html>