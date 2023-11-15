<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <h1>La liste des articles</h1>
    <table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">description</th>
      <th scope="col">poids</th>
      <th scope="col">couleur </th>
      <th scope="col">Prix_achat </th>
      <th scope="col">id_fournisseur</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($articles as $articles)
    <tr>
      <td>{{ $articles->id }} </td>
      <td>{{ $articles->description }}</td>
      <td>{{ $articles->poids }}</td>
      <td>{{ $articles->couleur }} </td>
      <td>{{ $articles->prix_achat  }} </td>
      <td>{{ $articles->id_fournisseur}} </td>

      </tr>
    @endforeach
    
    
  </tbody>
</table>
</body>
</html>