<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Series extends Controller
{
    /**
     * Método responsável por retornar a lista de séries
     */
    public static function index(){
        $series = Serie::query()->orderBy('nome')->get();        
        
        return view('series/index', [
            'series' => $series
        ]) ;
    }

    public static function create(){
        return view('series/create');
    }
    /**
     * Método responsável por armazenar uma série na lista
     * @param $request
     */
    public function store(Request $request)
    {
        $nomeSeries = $request->nome;
        Serie::create($request->all());

        return redirect('/series');   
    }

    /**
     * Método responsável por apagar uma série da lista
     * @param $id
     */
    public function delete(Request $request)
    {
        $nomeSeries = $request;
        dd($nomeSeries);
        DB::table('series')->where('nome', '=', (?))->delete();
        return redirect('/series');
    }
}
