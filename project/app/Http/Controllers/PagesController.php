<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Partenaire;
use App\Models\Pub;
use App\Models\Realisation;
use App\Models\Service;
use App\Models\Team;
use App\Models\Temoyage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-end.index', [
            'partners' => Partenaire::all(),
            'services' => Service::all(),
            'teams' => Team::all(),
            'temoyage' => Temoyage::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('front-end.pages.about', [
            'partners' => Partenaire::all(),
            'services' => Service::all(),
            'teams' => Team::all(),
            'temoyage' => Temoyage::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function realisation()
    {
        return view('front-end.pages.realisation', [
            'partners' => Partenaire::all(),
            'services' => Service::all(),
            'teams' => Team::all(),
            'temoyage' => Temoyage::all(),
            'realisations' => Realisation::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('front-end.pages.contact', [
            'partners' => Partenaire::all(),
            'services' => Service::all(),
            'teams' => Team::all(),
            'temoyage' => Temoyage::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function media()
    {
        return view('front-end.pages.mediatheque', [
            'partners' => Partenaire::all(),
            'services' => Service::all(),
            'teams' => Team::all(),
            'mediatheque' => Media::all()
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pubs()
    {
        return view('front-end.pages.pub', [
            'partners' => Partenaire::all(),
            'services' => Service::all(),
            'teams' => Team::all(),
            'pubs' => Pub::all()
        ]);
    }
}
