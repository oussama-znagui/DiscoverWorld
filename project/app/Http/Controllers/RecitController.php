<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Recit;
use Illuminate\Http\Request;
use App\Services\ImageService;
use Illuminate\Support\Facades\Cache;

class RecitController extends Controller
{
    private $imageService;
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }
    public function index()
    {
        // dd(Recit::all());
        if(request("sort")){
            Cache::forget("data");
        }
        $data = Cache::remember("data", 14400, function () {
            $recits = Recit::query();

            if (request("sort") === "oldest") {
                $recits->oldest();
            } else if (request("sort") === "latest") {
                $recits->latest();
            }

            return $recits->get();
        });

        return view('welcome', [
            'recits' => $data,
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
        $recit = Recit::create($validatedData);
        // dd($request->file('images'));
        $this->imageService->store($request->file('images'), $recit);
        return redirect('/');
    }
}
