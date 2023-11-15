<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <h1>Les différentes villes des fournisseurs.    </h1>
    <table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">ville</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($villes as $ville)
    <tr>
     
      <td>{{ $ville}}</td>
      </tr>
    @endforeach
    
    
  </tbody>
</table>
</body>
</html>