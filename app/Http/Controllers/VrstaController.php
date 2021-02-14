<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use App\Models\Pol;
use App\Models\Proizvod;
use App\Models\Telefon;
use App\Models\Vrsta;
use Illuminate\Http\Request;

class VrstaController extends Controller
{
    public function all(){
        $vrste=Vrsta::all();
        $proizvodi=Proizvod::all();
        foreach ($vrste as $vrsta) {
            $tehnika=[];
            foreach ($proizvodi as $proizvod) {
                if ($proizvod->vrsta_id == $vrsta->id){
                    $tehnika[count($tehnika)]=$proizvod;
                }
            }
            $vrsta->proizvodi=$tehnika;
        }

        return view('pocetna', [
            'vrste'=>$vrste
        ]);

    }
    public function view($id){
        $vrsta=Vrsta::findOrFail($id);
        $proizvodi=Proizvod::all();
        $tehnika=[];
        foreach ($proizvodi as $proizvod) {
            if ($proizvod->vrsta_id == $vrsta->id){
                $tehnika[count($tehnika)]=$proizvod;
            }
        }
        $vrsta->proizvodi=$tehnika;
        return view('vrsta',['vrsta'=>$vrsta]);

    }
    public function getAll(){
        $vrste=Vrsta::all();
        $proizvodi=Proizvod::all();
        foreach ($vrste as $vrsta) {
            $tehnika=[];
            foreach ($proizvodi as $proizvod) {
                if ($proizvod->vrsta_id == $vrsta->id){
                    $tehnika[count($tehnika)]=$proizvod;
                }
            }
            $vrsta->proizvodi=$tehnika;
        }

        return response()->json($vrste,200);
    }
    public function getById($id){
        $vrsta=Vrsta::find($id);
        $proizvodi=Proizvod::all();
        if(is_null($vrsta)){
            return response()->json(["message"=>"Ne postoji vrsta proizvoda"],404);
        }
        $tehnika=[];
        foreach ($proizvodi as $proizvod) {
            if ($proizvod->vrsta_id == $vrsta->id){
                $tehnika[count($tehnika)]=$proizvod;
            }
        }
        $vrsta->proizvodi=$tehnika;
        return response()->json($vrsta,200);
    }
}
