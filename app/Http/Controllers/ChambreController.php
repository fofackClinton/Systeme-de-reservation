<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ChambresRequest;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backoffice.chambres.liste', [
            'chambres' => Chambre::all()
        ]);
    }
    public function liste()
    {
        return view('chambres/ListesChambres', [
            'chambres' => Chambre::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.chambres.creer',[
            'chambre' => new Chambre()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChambresRequest $request)
    {
        try {
            //code...
            DB::beginTransaction();
            $data = $request->file('image')->store('images','public');
            Chambre::create([
                'NOM_CHAMBRE'=>$request->NOM_CHAMBRE,
                'TYPE_CHAMBRE'=>$request->TYPE_CHAMBRE,
                'IMAGE'=>$data,
                'DESCRIPTION'=>$request->DESCRIPTION,
                'PRIX'=>$request->PRIX,
                'NOMBRE_LITS'=>$request->NOMBRE_LITS,
                'TELEVISION'=>$request->TELEVISION
            ]);
            DB::commit();
            return to_route('chambre.index');
        } catch (\Throwable $th) {
            return $th;
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(CHAMBRE $cHAMBRE)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backoffice.chambres.creer',[
            'chambre' => chambre::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            DB::beginTransaction();
            $chambre = Chambre::find($id);
            $chambre->NOM_CHAMBRE=$request->NOM_CHAMBRE;
            $chambre->TYPE_CHAMBRE=$request->TYPE_CHAMBRE;
            $chambre->DESCRIPTION=$request->DESCRIPTION;
            $chambre->PRIX=$request->PRIX;
            $chambre->NOMBRE_LITS=$request->NOMBRE_LITS;
            $chambre->TELEVISION=$request->TELEVISION;
            $chambre->save();
            return to_route('chambre.index');
            DB::commit();

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CHAMBRE $cHAMBRE)
    {
        //
    }

    /**
     * Donne les detail d'une chambre.
     */
    public function detail(CHAMBRE $cHAMBRE){

        //

    }
}
