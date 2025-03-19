<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Hospital;
use App\Http\Resources\HospitalResource;
use App\Http\Requests\HospitalRequest;
use App\Http\Requests\StoreHospitalRequest;
use App\Http\Requests\UpdateHospitalRequest;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Hospital::query();

        if ($request->has('nombre')) {
            $query->where('nombre', 'LIKE', '%' . $request->nombre . '%');
        }
        
        if ($request->has('especialidad')) {
            $query->where('especialidad', 'LIKE', '%' . $request->especialidad . '%');
        }

        if ($request->has('comuna')) {
            $query->where('comuna', $request->comuna);
        }


        return response()->json($query->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHospitalRequest $request)
    {   
        $hospital = Hospital::create($request->validated());

        return response()->json([
            'mensaje' => 'Hospital creado correctamente',
            'hospital' => $hospital
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hospital $hospital)
    {
        return new HospitalResource($hospital);
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
    public function update(UpdateHospitalRequest $request, $id) {
        $hospital = Hospital::find($id);
    
        if (!$hospital) {
            return response()->json(['mensaje' => 'Hospital no encontrado'], 404);
        }
    
        $hospital->update($request->validated());
    
        return response()->json([
            'mensaje' => 'Hospital actualizado correctamente',
            'hospital' => $hospital
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $hospital = Hospital::find($id);
    
        if (!$hospital) {
            return response()->json(['mensaje' => 'Hospital no encontrado'], 404);
        }
    
        $hospital->delete();
    
        return response()->json(['mensaje' => 'Hospital eliminado correctamente']);
    }
}
