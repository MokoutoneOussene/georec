<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $realisations = Realisation::all();
        return view('back-end.pages.realisations.index', compact('realisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('back-end.pages.realisations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $donne = $request->all();
        if ($request->img != null) {
            $donne['img'] = $request->img->store('media', 'public');
        }
        Realisation::create($donne);

        return redirect()->route('gestion_realisation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return view('front-end.pages.realisation_show', [
            'finds' => Realisation::find($id),
            'realisations' => Realisation::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back-end.pages.realisations.edit', [
            'finds' => Realisation::find($id),
        ]);
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
        $realisation = Realisation::find($id);
        $realisation->update($request->except(['img']));

        return redirect()->route('gestion_realisation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $realisation = Realisation::find($id);
        $realisation->delete();

        return redirect()->route('gestion_realisation.index');
    }
}
