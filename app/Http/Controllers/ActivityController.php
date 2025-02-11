<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "List of activitys";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Form to create an activity";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Save new activity";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return "Showing activity with ID: $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return "Form to edit the activity with ID: $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        return "Update activity with ID: $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return "Destroy activity with ID: $id";
    }
}
