<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\AlternativeValue;
use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $alternatives = Alternative::where('user_id', $user->id)->get();
        return view('alternatives.index', compact('alternatives'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $criteria = Auth::user()->criteria;
        return view('alternatives.create', compact('criteria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'criteria' => 'required|array',
            'criteria.*' => 'required|numeric|min:0', // Validate criteria values
        ]);
        $data = $request->only(['name', 'criteria']);
        $data['user_id'] = $user->id;
        $data['user_id'] = $user->id;
        $alternative = $user->alternatives()->create($data);

        $alternativeValues = [];
        foreach ($request['criteria'] as $criteria_id => $score) {
            $alternativeValues[] = [
                'criteria_id' => $criteria_id,
                'alternative_id' => $alternative->id,
                'score' => $score,
            ];
        }
        AlternativeValue::insert($alternativeValues);
        return redirect()->route('dashboard')->with('success', 'Alternative created successfully.');
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
        //ambil data alternative berdasarkan id
        $alternative = Alternative::findOrFail($id);
        return view('alternatives.edit', compact($alternative));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alternative = Alternative::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $data = $request->all();
        $alternative->update($data);
        return redirect()->route('alternatives.index')->with('success', 'Alternative updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alternative = Alternative::findOrFail($id);
        $alternative->delete();
        return redirect()->route('alternatives.index')->with('success', 'Alternative deleted successfully.');
    }
}
