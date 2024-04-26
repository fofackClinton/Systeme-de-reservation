<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use App\Models\Chambre;
use App\Models\Occupation;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;
use App\Http\Requests\reservationRequest;
use App\Models\Typeoccupation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backoffice.reservation.liste',[
            'reservations' => Reservation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.reservation.creer',[
            'reservation'=> new Reservation(),
            'chambres' => Chambre::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(reservationRequest $request)
    {
        //dd($request);
        $role = Role::where('NOM_ROLE', 'client')->first();
        $date = $request->dateDebut;
        $Durer = $request->jours;
        $prix = Chambre::find($request->chambre)->PRIX * $Durer * 0.3;
        //$prixx = $prix->PRIX;
        //dd($prix);
        $dateDebute = Carbon::parse($date)->addHours(12)->format('Y-m-d');
        $datefin = Carbon::parse($date)->addDays($Durer)->format('Y-m-d');
        //$dateee = $datee->addDays(29);
        //$jourFin = Carbon::now()->tz('Africa/Douala')->format('Y-m-d');
       // dd($datee);
        try {

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
            Reservation::create([
                'ID_CHAMBRE'=>$request->chambre,
                'ID'=>$uer->id,
                'prix'=>$prix,
                'Statut'=>'Atente',
                'Durer'=>$Durer,
                'DATE_DEBUT'=>$dateDebute,
                'DATE_FIN'=>$datefin,
            ]);

            DB::commit();
            return to_route('reservation.index');

        } catch (\Throwable $th) {
            return $th;
        }
    }
        /**
     * Store a newly created resource in storage.
     */
    public function valider(String $reservation)
    {
        try {
            //code...
            DB::beginTransaction();
            $resa = Reservation::find($reservation);
            $resa->Statut = 'Valider';
            $resa->save();
            $montat = $resa->prix / 0.3;
            $reste = $montat - $resa->prix;
            $type = Typeoccupation::where('libele','sejour')->first();
            Occupation::create([
                'ID_CHAMBRE'=>$resa->ID_CHAMBRE,
                'ID'=>$resa->ID,
                'ID_type'=>$type->ID_type,
                'Durer'=>$resa->Durer,
                'Statut'=>'Avancer',
                'montatpayer'=>$resa->prix,
                'montat'=>$montat,
                'restepayer'=>$reste,
                'DATE_DEBUT'=>$resa->DATE_DEBUT,
                'DATE_FIN'=>$resa->DATE_DEBUT,
                'HEURE_DEBUT'=>"12:00:00",
                'HEURE_FIN'=>"12:00:00"
            ]);
            DB::commit();
            return to_route('reservation.index');
        } catch (\Throwable $th) {
            return $th;
        }

    }
    public function annuler(String $reservation)
    {
        try {
            //code...
            DB::beginTransaction();
            $resa = Reservation::find($reservation);
            $resa->Statut = 'annuler';
            $resa->save();
            DB::commit();
            return to_route('reservation.index');
        } catch (\Throwable $th) {
            return $th;
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(RESERVATION $rESERVATION)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string  $id)
    {
        return view('backoffice.reservation.creer',[
            'reservation'=> Reservation::with('Chambre')->find($id),
            'chambres' => Chambre::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(reservationRequest $request, string $id)
    {
        //dd($request);

        $date = $request->dateDebut;
        $Durer = $request->jours;
        $prix = Chambre::find($request->chambre)->PRIX * $Durer * 0.3;
        //$prixx = $prix->PRIX;
        //dd($prix);
        $dateDebute = Carbon::parse($date)->addHours(12)->format('Y-m-d');
        $datefin = Carbon::parse($date)->addDays($Durer)->format('Y-m-d');
        //$dateee = $datee->addDays(29);
        //$jourFin = Carbon::now()->tz('Africa/Douala')->format('Y-m-d');
         // dd($datee);
         try {
            //code...
         } catch (\Throwable $th) {
            //throw $th;
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $reservation)
    {
        //
        try {
            //code...
            DB::beginTransaction();
             Reservation::find($reservation)->delete();
            DB::commit();
            return to_route('reservation.index');
        } catch (\Throwable $th) {
            return $th;
        }
    }
     /**
     * Donne les detail d'une reservation.
     */
    public function detail(RESERVATION $rESERVATION){

        //

    }
}
