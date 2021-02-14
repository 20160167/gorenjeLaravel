<?php

namespace App\Http\Controllers;

use App\Models\Proizvod;
use App\Models\Telefon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProizvodController extends Controller
{
    public function view($id){

        $pieces = explode("/", url()->current());
        $proizvod= Proizvod::findOrFail($pieces[count($pieces)-1]);
        return view('proizvod',['proizvod'=>$proizvod]);

    }
    public function getAll(){

        return response()->json(Proizvod::all(),200);
    }
    public function getById($id){
        $proizvod= Proizvod::find($id);
        if(is_null($proizvod)){
            return response()->json(["message"=>"Nema datog proizvoda"],404);
        }
        return response()->json($proizvod,200);
    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'naziv'=>'required|min:2',
            'opis'=>'required|min:2',
            'slika'=>'required|min:2',
            'cena'=>'required',
            'energetski_razred'=>'required',
            'boja'=>'required|min:2',
            'materijal'=>'required|min:2',
            'dimenzije'=>'required|min:2',
            'vrsta_id'=>'required',

        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna"],400);
        }
        $proizvod= Proizvod::create($request->all());
        return response()->json($proizvod, 201);
    }
    public function delete(Request $request, $id){
        $proizvod= Proizvod::find($id);

        if(is_null($proizvod)){
            return response()->json(["message"=>"Ne postoji proizvod"],404);
        }
        $proizvod->delete();
        return response()->json(null,204);
    }
    public function korpa(Request $request){
        $stara=[];
        if($request->session()->has('korpa')) {
            $stara = $request->session()->get('korpa');
        }
        $korpa=array();
        foreach ($stara as $elements) {
            foreach ($elements as $element) {
                $korpa[$element->id]=$element;
            }
        }
        return view('korpa',['korpa'=>$korpa]);
    }
    public function dodajUKorpu(Request $request){
        $proizvod=Proizvod::find($request->id);
        if($request->session()->has('korpa')){
            $stara=$request->session()->get('korpa');
            $korpa=array();
            $request->session()->forget('korpa');
            foreach ($stara as $elements) {
                foreach ($elements as $element) {
                    $korpa[$element->id]=$element;
                }
            }
            $korpa[$request->id]=$proizvod;
            $request->session()->push('korpa',$korpa);
        }else{
            $korpa=array();
            $korpa[$request->id]=$proizvod;
            $request->session()->push('korpa',$korpa);
        }
        return view('korpa',['korpa'=>$korpa]);


    }
}
