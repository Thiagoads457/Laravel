<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <form action="/respostaExer4" method="POST">
        @CSRF
        <input type="number" name="valor1">
        <input type="number" name="valor2">
        <button type="submit">Calcular</button>

    </form>
</body>
</html>