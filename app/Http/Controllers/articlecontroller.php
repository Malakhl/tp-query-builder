<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class articlecontroller extends Controller
{
    public function articles(){
        $articles = DB::table('articles')->get();
        return view('list_a', ['articles' => $articles]);
    }
        
    public function descriptionandpoids(){
        $articles = DB::table('articles')->select('description', 'poids')->get();
         return view('list_description_poids',['articles'=>$articles]);
     
    }

    public function article($id){
       $article=DB::table('articles')->find($id);
       return view('article_id', ['article' => $article  ,'id'=>$id]);
    }
     
    public function articlevert(){
     $articles = DB::table('articles')-> where('couleur','vert')->get();
     return view('list_a', ['articles' => $articles]);
    }

    public function article_prix_achat(){
        $articles = DB::table('articles')-> where('couleur','vert')
                                         ->where('prix_achat', '>', 500)
                                         ->get();
          return view('article_prix_achat', ['articles' => $articles]);
    }
    
    public function article_poids(){
        $articles=DB::table('articles')->whereBetween('poids', [200, 300])->get();
        return view('list_a', ['articles' => $articles]);
    }
    public function nb_articles(){
        $nb=DB::table('articles')->count();
        return view('nombre_article',['nb'=>$nb,'moyenne'=>'']);
    }
    public function moyenne(){
        $moyenne = DB::table('articles')->avg('prix_achat');
        return view('nombre_article',['moyenne'=>$moyenne , 'nb'=>'']);
    }
}
