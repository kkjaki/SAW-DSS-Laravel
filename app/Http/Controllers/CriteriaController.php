<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $criteria = Criteria::where('user_id', $user->id)->get();
        return view('dashboard', compact('criteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('criteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'attribute' => 'required|in:benefit,cost',
            'weight' => 'required|numeric|min:0|max:100',
        ]);
        $data = $request->all();
        $data['user_id'] = $user->id;
        Criteria::create($data);
        return redirect()->route('dashboard')->with('success', 'Criteria created successfully.');
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
        //ambil data criteria berdasarkan id
        $criteria = Criteria::findOrFail($id);
        return view('criteria.edit', compact('criteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'attribute' => 'required|in:benefit,cost',
            'weight' => 'required|numeric|min:0|max:100',
        ]);
        //caridata criteria berdasarkan id
        $criteria = Criteria::findOrFail($id);
        $criteria->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //ambil data criteria berdasarkan id
        $criteria = Criteria::findOrFail($id);
        $criteria->delete();
    }
}
