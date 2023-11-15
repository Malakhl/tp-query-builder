<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <h1>Les description et les poids des articles.  </h1>
    <table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">description</th>
      <th scope="col">poids</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($articles as $article)
    <tr>
     
      <td>{{ $article->description}}</td>
      <td>{{ $article->poids }}</td>
      </tr>
    @endforeach
    
    
  </tbody>
</table>
</body>
</html>