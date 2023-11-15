<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <h2>  </h2>
    <a class="btn btn-primary" role="button" href="{{route('liste-fournisseurs')}}">1-La liste des fournisseurs</a><br><br>

   
    <a class="btn btn-primary" role="button" href="{{route('liste-fournisseurs-agadir')}}">  2-La liste des fournisseurs d’Agadir. </a><br><br>

    <a class="btn btn-primary" role="button" href="{{route('liste-nom-ville')}}">  3-Les noms et les villes des fournisseurs.  </a><br><br>
   
    <a class="btn btn-primary" role="button" href="{{route('liste-ville')}}">  4-Les différentes villes des fournisseurs.    </a><br><br><br><br>

    
    
    <a class="btn btn-primary" role="button" href="{{route('liste-articles')}}">  5-La liste des articles.  </a><br><br>

   <a class="btn btn-primary" role="button" href="{{route('description_poids')}}">6-Les désignations et les poids des articles.  </a><br><br>
   
   <a class="btn btn-primary" role="button" href="{{route('article_par_id',['id' => 1])}}">7-l'article 'id'.  </a><br><br>

   
   <a class="btn btn-primary" role="button" href="{{route('article_par_couleur')}}">8-Les numéros et les désignations des articles de couleur verte.  </a><br><br>

   
   <a class="btn btn-primary" role="button" href="{{route('article_par_prix_achat')}}">9.Les désignations des articles de couleur verte ayant un prix d’achat supérieur à 500.    </a><br><br>
   

   <a class="btn btn-primary" role="button" href="{{route('liste-par_poids')}}">10-Les articles ayant un poids entre 200 et 300.      </a><br><br>
   
   <a class="btn btn-primary" role="button" href="{{route('nombre_articles')}}">11.	Le nombre d’articles.        </a><br><br>
   <a class="btn btn-primary" role="button" href="{{route('moyenne')}}">12.	La moyenne des prix d’achat.         </a><br><br>


</body>
</html>