<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class BirrerieController extends Controller
{
    public function list(){
    
        $response = Http::withOptions([
            'verify' => false,
        ])->get("https://api.openbrewerydb.org/v1/breweries?per_page=20");
        
        $response = response()->json($response->json());
        $lista_birrerie = $response->original;
        
        return view('dashboard', [
            'lista_birrerie' => $lista_birrerie
        ]);
    }
    
    public function lista_birrerie(){
        
        $response = Http::withOptions([
            'verify' => false,
        ])->get("https://api.openbrewerydb.org/v1/breweries?per_page=20");
        
        $response = response()->json($response->json());
        $lista_birrerie = $response->original;
        
        return view('welcome', [
            'lista_birrerie' => $lista_birrerie
        ]);
    }
}