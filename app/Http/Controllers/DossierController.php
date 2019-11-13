<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use App\Models\Paragraph;
use Illuminate\Http\Request;

use Log;

class DossierController extends Controller {


	public function index()
        {
            $dossier = Dossier::all();
            return response()->json($dossier);
	}
        
        public function insert(Request $request)
        {
            $dossier = new Dossier();
            $dossier->title = $request->input('title');
            $dossier->created_by = 1;
            $dossier->save();
            
            
            Log::info('para =>'.print_r($request->input('paragraphs'), true));
            
            foreach($request->input('paragraphs') as $para){
                Log::info('why =>'.$para['text']);              
            }
            

            foreach($request->input('paragraphs') as $para){
                Log::info('why');
                $paragraph = new Paragraph(['text' => $para['text']]);
                $dossier->paragraphs()->save($paragraph);                
            }
            
            return response()->json($dossier);
               
            
            
        }
        
        
        
        
        

}