<?php

namespace App\Http\Controllers;

use App\Models\plant;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $plan =  plant::latest();
        if($request->has('search')){
          $plan->where('nata', 'LIKE','%' . $request->search.'%');
        }

        // filter kategori
        if($request->has('filkatam')){
           $plan->where('katam', '=', $request->filkatam);
        }

        return view('user.plants', ['data'=>$plan->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('user.saveplant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = $request->file('gamta')->store('img-plant');

        $plant = plant::create(
            [
                'id' => $request->id,
                'verif' => $request->verif,
                'verifer' => $request->verifer,
                'nator' => $request->nator,
                'email' => $request->email,
                'nowa' => $request->nowa,
                'nata' => $request->nata,
                'lata' => $request->lata,
                'gamta' => $path,
                'klatam' => $request->klatam,
                'color' => $request->color,
                'katam' => $request->katam,
                'lotam' => $request->lotam,
                'deletam' => $request->deletam,
                'desitam' => $request->desitam,
                'litam' => $request->litam
            ]
        );

        if ($plant) {
            return redirect('/plant')->with('status', 'Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    /**
     * view contents of the specified resource
     */
    public function read(string $id, Request $request)
    {
        $data = plant::find($id);
        return view('plant.page', compact('data'));
    }
}
