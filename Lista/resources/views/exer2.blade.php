<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="/respostaExer2" method="POST">
        @CSRF
        <input type="numer" name="valor1">
        <input type="numer" name="valor2">
        <button type="submit">Calcular</button>
    </form>
    
</body>
</html>