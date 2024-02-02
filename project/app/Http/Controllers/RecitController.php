<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Recit;
use Illuminate\Http\Request;


class RecitController extends Controller
{
    public function index()
    {
        // dd(Recit::all());

        return view('welcome', [
            'recits' => Recit::all(),
            'destinations' => Destination::all()


        ]);
    }
    public function create()
    {
        return view('addrecit', [
            'destinations' => Destination::all()
        ]);
    }
    public function recit(Recit $recit)
    {
        // dd($recit);
        return view('recit', [
            "recit" => $recit
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'titre' => ['required'],
            'destination_id' => ['required'],
            'description' => ['required'],
            'conseil' => ['required'],
        ]);
        Recit::create($validatedData);
        return redirect('/');
    }
}
