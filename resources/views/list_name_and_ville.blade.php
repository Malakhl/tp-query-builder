<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <h1>Les noms et les villes des fournisseurs.  </h1>
    <table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">ville</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($frs as $fournisseur)
    <tr>
     
      <td>{{ $fournisseur->nom }}</td>
      <td>{{ $fournisseur->ville }}</td>
      </tr>
    @endforeach
    
    
  </tbody>
</table>
</body>
</html>