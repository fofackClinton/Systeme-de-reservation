<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use App\Models\Chambre;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class frontOfficeController extends Controller
{
    public function index()
    {
        return view('FrontOffice/Accueil', [
            'chambres' => Chambre::all()->take(6)
        ]);
    }
    public function liste()
    {
        return view('chambres/ListesChambres', [
            'chambres' => Chambre::all()
        ]);
    }
    public function detail(string $id)
    {
        return view('chambres/DetailChambre', [
            'chambre' => Chambre::find($id)
        ]);
    }
    public function admin()
    {
        $chambre =Chambre::count();
        $reservation = Reservation::count();
        $utilisateur = User::count();
        $resaAnnul = Reservation::where('Statut', 'annuler')->count();

       
        return view('backoffice.acceuil',[
            'chambre'=>$chambre,
            'reservation'=>$reservation,
            'utilisateur'=>$utilisateur,
            'resaAnnul'=>$resaAnnul

        ]);

    }
    public function dispo(Request $request, string $id)
    {
        $date1 = str_replace(' ', '', $request->debut) . "-2024";
        $date2 = str_replace(' ', '', $request->fin) . "-2024";
        $dateDebute = Carbon::parse($date1)->format('Y-m-d');
        $dateFin = Carbon::parse($date2)->format('Y-m-d');
        $durer = Carbon::parse($date1)->diff(carbon::parse($date2))->days;
        $prix = Chambre::find($id)->PRIX * $durer * 0.3;
        return view('FrontOffice.info',[
            'dateDebut'=> $dateDebute,
            'dateFin'=>$dateFin,
            'prix'=>$prix,
            'durer'=>$durer,
            'chambre'=>Chambre::find($id)
        ]);
    }
    public function reserver(Request $request)
    {
        //dd($request);
        $role = Role::where('NOM_ROLE', 'client')->first();
        try {

            DB::beginTransaction();
            User::create([
                'NOM'=>$request->nom,
                'PRENOM'=>$request->prenom,
                'TELEPHONE'=>$request->tel,
                'email'=>$request->email,
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
                'prix'=>$request->prix,
                'Statut'=>'Atente',
                'Durer'=>$request->durer,
                'DATE_DEBUT'=>$request->dateDebut,
                'DATE_FIN'=>$request->dateFin,
            ]);

            DB::commit();
            return to_route('acceuil')->with('success','La Réservation à eté effectuer avec sucess');

        } catch (\Throwable $th) {
            return $th;
        }
    }
    public function listing(Request $request)
    {
        $chambres = Chambre::query();
        $dateDebut = Carbon::parse($request->debut)->format('Y-m-d');
        $dateFin = Carbon::parse($request->fin)->format('Y-m-d');
        $nombre = $request->dropdown;
        if ($nombre) {
            $chambres = $chambres->where('NOMBRE_LITS','>=',$nombre)->get();
        }

        // $query = DB::table('reservation')->whereNotBetween('DATE_DEBUT', [$dateDebut, $dateFin])
        // ->get();
        // $query2 =DB::table('reservation')->whereNotBetween('DATE_FIN', [$dateDebut, $dateFin]) ->get();

        //$query = $query->join('reservation');


        return view('chambres/ListesChambres', [
            'chambres' => $chambres
        ]);
    }
}
