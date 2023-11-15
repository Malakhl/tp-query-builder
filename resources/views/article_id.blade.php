<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <h1> article {{$id}}</h1>
    @if($article)
    <table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">description</th>
      <th scope="col">poids</th>
      <th scope="col">couleur </th>
      <th scope="col">Prix_achat </th>
      <th scope="col">ville</th>
    </tr>
  </thead>
  <tbody>
    
   
    <tr>
      <td>{{ $article->id }} </td>
      <td>{{ $article->description }}</td>
      <td>{{ $article->poids }}</td>
      <td>{{ $article->couleur }} </td>
      <td>{{ $article->prix_achat  }} </td>
      <td>{{ $article->id_fournisseur}} </td>

      </tr>
    @else
    <p>L'article avec l'ID {{ $id }} n'a pas été trouvé.</p>
    @endif
    
    
  </tbody>
</table>
</body>
</html>