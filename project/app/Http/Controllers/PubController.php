<?php

namespace App\Http\Controllers;

use App\Models\Pub;
use Illuminate\Http\Request;

class PubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pubs = Pub::all();
        return view('back-end.pages.pubs.index', compact('pubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.pages.pubs.create');
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
        Pub::create($donne);

        return redirect()->route('gestion_pubs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('front-end.pages.pub_show', [
            'finds' => Pub::find($id),
            'pubs' => Pub::all(),
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
        return view('back-end.pages.pubs.edit', [
            'finds' => Pub::find($id),
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
        $pubs = Pub::find($id);
        $pubs->update($request->except(['img']));

        return redirect()->route('gestion_pubs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pubs = Pub::find($id);
        $pubs->delete();

        return redirect()->route('gestion_pubs.index');
    }
}
