<?php

namespace App\Http\Controllers;

use App\Http\Requests\OccupationRequest;
use App\Models\Chambre;
use App\Models\Occupation;
use App\Models\Role;
use App\Models\Typeoccupation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toDay = Carbon::now()->format('Y-m-d');
        $occupationA = Occupation::with('Chambre','user','Typeoccupation')->get();

        //dd($occupationA);
        $occupation = Occupation::where('DATE_DEBUT','=',$toDay)->orderBy('HEURE_DEBUT','DESC')->with('Chambre','user','Typeoccupation')->get();
        //dd($occupation);
        return view('backoffice.occupation.liste', [
            'occupation' => $occupationA
        ]);
    }

    public function historique()
    {
        return view('backoffice.occupation.historique', [
            'occupation' => Occupation::orderBy('created_at', 'DESC')->with('Chambre','user','Typeoccupation')->get()
        ]);
    }
    public function paiement(string $id)
    {
        return view('backoffice.occupation.payer',[
            'occupation'=> Occupation::find($id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backoffice.occupation.creer',[
            'occupation' => new Occupation(),
            'chambres' => Chambre::all(),
            'types' => Typeoccupation::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $role = Role::where('NOM_ROLE', 'client')->first();
        //dd($request);
        $toDay = Carbon::now()->format('Y-m-d');
        $temps = Carbon::now()->tz('Africa/Douala')->addMinutes(30)->format('H:i:s');
        //dd($temps);
        $tem = $request->jours;
        //dd($tem);
        if ($tem == null) {
            $dure = 1;
            $tempsFin = Carbon::now()->tz('Africa/Douala')->addHour(3)->addMinutes(30)->format('H:i:s');
            $jourFin = Carbon::now()->tz('Africa/Douala')->format('Y-m-d');
        } else {
            $jourFin = Carbon::now()->tz('Africa/Douala')->addDay($tem)->addMinutes(30)->format('Y-m-d');
            $tempsFin = "12:00:00";
            $dure= $request->jours;
        }
        $chambre = Chambre::find($request->chambre);
        $prixChambre = $chambre->PRIX;
        $prixtotal = $prixChambre * $dure;
        if ($request->montant >=  $prixtotal) {
            $statut = 'payer';
            $reste = 0;
        }else{
            $statut = 'avancer';
            $reste = $prixtotal - $request->montant;
        }



        //dd($tempsFin);
        try {
            //code...
            DB::beginTransaction();
            User::create([
                'NOM'=>$request->nom,
                'PRENOM'=>$request->prenom,
                'TELEPHONE'=>$request->tel,
                'email'=>$request->cni,
                'password'=>Hash::make($request->tel),
                'CNI'=>$request->cni,
                'ID_ROLE'=>$role->ID_ROLE
            ]);

        $cni = $request->cni;
        $uer = User::where('CNI', $cni)->first();
        //dd($uer);
        Occupation::create([
            'ID_CHAMBRE'=>$request->chambre,
            'ID'=>$uer->id,
            'ID_type'=>$request->type,
            'Durer'=>$dure,
            'Statut'=>$statut,
            'montatpayer'=>$request->montant,
            'montat'=>$prixtotal,
            'restepayer'=>$reste,
            'DATE_DEBUT'=>$toDay,
            'DATE_FIN'=>$jourFin,
            'HEURE_DEBUT'=>$temps,
            'HEURE_FIN'=>$tempsFin
        ]);
        DB::commit();
        return to_route('occupation.index');

        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(OCCUPATION $oCCUPATION)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $occupation = Occupation::with('Chambre','user','Typeoccupation')->find($id);


        return view('backoffice.occupation.creer',[
            'occupation' => $occupation,
            'chambres' => Chambre::all(),
            'types' => Typeoccupation::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = Role::where('NOM_ROLE', 'client')->first();
        //dd($request);
        $toDay = Carbon::now()->format('Y-m-d');
        $temps = Carbon::now()->tz('Africa/Douala')->addMinutes(30)->format('H:i:s');
        //dd($temps);
        $tem = $request->jours;
        //dd($tem);
        if ($tem == null) {
            $dure = 1;
            $tempsFin = Carbon::now()->tz('Africa/Douala')->addHour(3)->addMinutes(30)->format('H:i:s');
            $jourFin = Carbon::now()->tz('Africa/Douala')->format('Y-m-d');
        } else {
            $jourFin = Carbon::now()->tz('Africa/Douala')->addDay($tem)->addMinutes(30)->format('Y-m-d');
            $tempsFin = "12:00:00";
            $dure= $request->jours;
        }

        try {
            DB::beginTransaction();
            $occ = Occupation::with('Chambre','user','Typeoccupation')->find($id);
            $use = $occ->ID;

            $utilisateur = User::find($use);
            $utilisateur->NOM = $request->nom;
            $utilisateur->PRENOM = $request->prenom;
            $utilisateur->TELEPHONE = $request->tel;
            $utilisateur->email = $request->cni;
            $utilisateur->password = Hash::make($request->tel);
            $utilisateur->CNI=$request->cni;
            $utilisateur->ID_ROLE=$role->ID_ROLE;
            $utilisateur->save();

            $occupation = Occupation::find($id);
            $occupation->ID_CHAMBRE = $request->chambre;
            $occupation->ID = $use;
            $occupation->ID_type = $request->type;
            $occupation->Durer = $dure;
            $occupation->DATE_DEBUT = $toDay;
            $occupation->DATE_FIN = $jourFin;
            $occupation->HEURE_DEBUT = $temps;
            $occupation->HEURE_FIN = $tempsFin;

            $occupation->save();
            DB::commit();
            return to_route('occupation.index');


        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $occupation)
    {
        //
        try {
            //code...
            DB::beginTransaction();
             Occupation::find($occupation)->delete();
            DB::commit();
            return to_route('occupation.index');
        } catch (\Throwable $th) {
            return $th;
        }
    }
    public function payer(Request $request, string $id)
    {

        try {
            //code...
            DB::beginTransaction();
            $occ = Occupation::find($id);
            if ($request->payer >=  $occ->restepayer) {
                $statut = 'payer';
                $reste = 0;
                $dejap = $occ->montat;
            }else{
                $statut = 'avancer';
                $reste = $occ->restepayer - $request->payer;
                $dejap = $request->payer + $occ->restepayer;
            }
            $occ->Statut= $statut;
            $occ->montatpayer=$dejap;
            $occ->restepayer=$reste;
            $occ->save();
            DB::commit();
            return to_route('occupation.index');
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
