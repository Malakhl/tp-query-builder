<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($nb)
    <h3>Le nombre d’articles = {{$nb}} </h3>
    @endif
    @if ($moyenne)
    <h3>	La moyenne des prix d’achat = {{$moyenne}}</h3>
    @endif
</body>
</html> 