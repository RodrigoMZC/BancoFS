<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Branch;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::all();
        return view('employes.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();
        return view('employes.create', compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employe = Employe::create($request->all());
        return redirect()->route('employes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        return view('employes.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        $branches = Branch::all();
        return view('employes.edit', compact('employe', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe)
    {
        $employe->update($request->all());
        return redirect()->route('employes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employe)
    {
        $employe->delete();
        return redirect()->route('employes.index');
    }
}
