<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vol;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservations = Reservation::paginate(4);

        return view('reserindex', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vols = Vol::all();
        return view('resercreate', compact('vols'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'vol' => 'required',
            'classe' => 'required',
            
        ]);
    
        $reser = Reservation::create($validatedData);
    
        return redirect('/reservations')->with('success', 'Vol créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $reserv = Reservation::findOrFail($id);

        return view('edit', compact('reserv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'vol' => 'required',
            'classe' => 'required',
            
        ]);
    
        Reservation::whereId($id)->update($validatedData);
    
        return redirect('/reservations')->with('success', 'Reservation mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $reserv = Reservation::findOrFail($id);
        $reserv->delete();
    
        return redirect('/reservations')->with('success', 'Reservation supprimer avec succèss');
    }
}
