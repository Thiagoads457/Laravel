<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Exercício 5</title>
</head>
<body>
    <form action="/respostaExer5" method="POST">
        @CSRF
        <input type="number" name="valor1">
        <input type="number" name="valor2">
        <input type="number" name="valor3">
        <button type="submit">Calcular Média</button>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success mt-2"> Converter </button>
            </div>
            <script src="{{ asset('js/app.js') }}"></script>
    </form>
    
</body>
</html>