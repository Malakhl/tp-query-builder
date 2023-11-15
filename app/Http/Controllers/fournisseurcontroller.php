<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fournisseurcontroller extends Controller
{
    public function fournisseurs(){
        $frs = DB::table('fournisseurs')->get();
        return view('list_f', ['frs' => $frs]);
    }
    public function agadir(){
        $frs = DB::table('fournisseurs')-> where('ville','agadir')->get();
        return view('list_f', ['frs' => $frs]);
    }

    public function nomandvill(){
        $frs = DB::table('fournisseurs')->select('nom', 'ville')->get();

    return view('list_name_and_ville', ['frs' => $frs]);
    }
     public function distinctvilles(){
        $villes = DB::table('fournisseurs')->distinct()->pluck('ville');
        return view('list_villes', ['villes' => $villes]);

     }
}
