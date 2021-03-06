<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pv;

class PvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pv = Pv::all();
        $data = ['pv'=> $pv];
        return view('pv.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();
        $request -> validate([
            'colore' => 'required|unique:pvs|max:255',
        ]);
        $pvnew = new Pv();
        $pvnew->colore = $data['colore'];
        $pvnew->tipologiaProdotto = $data['tipologia-prodotto'];
        $pvnew->liquidiSupportati = $data['liquidi-supportati'];
        $pvnew->prezzo = $data['prezzo'];
        $pvnew->description = $data['description'];
        // $pvnew->fill($data);
        $pvnew -> save();
        return redirect()->route('pv.index', $pvnew->find($pvnew->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pv $pv)
    {
        // $pv_sel = PV::find($id);
        $data = ['item' => $pv];
        return view('pv.show', $data);
    }

    // public function show($id)
    // {
    //     $pv_sel = PV::find($id);
    //     $data = ['item' => $pv_sel];
    //     return view('pv.show', $data);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pv $pv)
    {
        $data = ['item' => $pv];
        return view('pv.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pv $pv)
    {
        $data = $request -> all();
        $pv->colore = $data['colore'];
        $pv->tipologiaProdotto = $data['tipologia-prodotto'];
        $pv->liquidiSupportati = $data['liquidi-supportati'];
        $pv->prezzo = $data['prezzo'];
        $pv->description = $data['description'];
        // $pv -> update($data);
        $pv->save();
        return redirect()-> route('pv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PV $pv)
    {
        $pv-> delete();
        return redirect()-> route('pv.index');
    }
}
