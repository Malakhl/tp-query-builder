<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <h1>Les désignations des articles de couleur verte ayant un prix d’achat supérieur à 500.  </h1>
    <table class="table" border="1">
  <thead>
    <tr>
      
      <th scope="col">description</th>
      <th scope="col">couleur </th>
      <th scope="col">Prix_achat </th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($articles as $articles)
    <tr>
      <td>{{ $articles->description }}</td>
      <td>{{ $articles->couleur }} </td>
      <td>{{ $articles->prix_achat  }} </td>
      </tr>
    @endforeach
    
    
  </tbody>
</table>
</body>
</html>