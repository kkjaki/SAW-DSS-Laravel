<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\AlternativeValue;
use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlternativeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $criteria = $user->criteria;
        $alternatives = $user->alternatives;
        $alternativeValue = $alternatives?->load('alternativevalues');
        return view('dashboard', compact('alternativeValue', 'user', 'alternatives', 'criteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alternative-value.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'alternative_id' => 'required|exists:alternatives,id',
            'criteria_id' => 'required|exists:criteria,id',
            'score' => 'required|numeric|min:0',
        ]);

        AlternativeValue::create([
            'alternative_id' => $request->alternative_id,
            'criteria_id' => $request->criteria_id,
            'score' => $request->score,
        ]);

        return redirect()->route('dashboard')->with('success', 'Alternative value created successfully.');
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
        $alternativeValue = AlternativeValue::findOrFail($id);
        return view('alternative-value.edit', compact('alternativeValue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alternativeValue = AlternativeValue::findOrFail($id);
        $request->validate([
            'score' => 'required|numeric|min:0',
        ]);
        $alternativeValue->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alternativeValue = AlternativeValue::findOrFail($id);
        $alternativeValue->delete();
    }
}
