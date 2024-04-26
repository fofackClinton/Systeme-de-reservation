<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UtilisateursRequest;
use App\Models\Role;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function deconnexion()
    {
        auth()->logout();
        return redirect('/users/log');
    }
    public function login()
    {
        return view('backoffice.login');
    }
    public function connexion(Request $request)
    {


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);

        
        if (Auth::attempt($credentials)) {
           $request->session()->regenerate();

        return redirect()->intended(route('AppAdmin'));

        }else{
            return to_route('login')->withErrors([
                'email'=> 'email ou mot de passe invalide'
            ])->onlyInput('email')
            ;
            dd($credentials);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.utilisateurs.creer',[
            'utilisateur' => new User(),
            'role'=> Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UtilisateursRequest $request)
    {
        try {
            //code...
            DB::beginTransaction();
            User::create([
                'NOM'=>$request->nom,
                'PRENOM'=>$request->prenom,
                'TELEPHONE'=>$request->tel,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'CNI'=>$request->cni,
                'ID_ROLE'=>$request->role
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UtilisateursRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
    /**
     * Donne les detail d'un utilisateur.
     */
    public function detail(User $user){

        //

    }
}
