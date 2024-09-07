<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
    
</head>

<body>
    
    <form action="/respostaExer6" method="POST">
        @CSRF
        <div class="row">
            <div class="col -md col-lg2">
                <label for="">Conversão de Temperatura</label>
                <input type="number" name="celsius" class="form-control" placeholder="Temperatura em Celsius">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success mt-2"> Converter </button>
            </div>
    </form>

</body>

</html>