<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::with('user')->get();
        // return response()->json($activities);
        return view('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id' => 'required|exists:users,id',
            'datetime' => 'required|date',
            'paid' => 'required|boolean',
            'notes' => 'required|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);
    
        $activity = Activity::create($validatedData);
    
        $activityWithUser = Activity::with('user')->find($activity->id);
    
        return redirect()->route('activities.index')->with('success', 'Activity created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $activity = Activity::with('user')->findOrFail($id);
        // return response()->json($activity);
        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $activity = Activity::with('user')->findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id' => 'required|exists:users,id',
            'datetime' => 'required|date',
            'paid' => 'required|boolean',
            'notes' => 'required|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);
    
        $activity = Activity::findOrFail($id);
        $activity->update($validatedData);
    
        return redirect()->route('activities.index')->with('success', 'Activity updated correctly.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
    
        $deletedActivity = $activity->toArray();
    
        $activity->delete();
    
        return redirect()->route('activities.index')->with('success', 'Activity destroyed succesfully.');
    }
}
