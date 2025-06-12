<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LeadController extends Controller
{
    /**
     * Display a listing of leads.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Lead::all());
    }

    /**
     * Display the specified lead.
     * 
     * @param string $id The lead ID
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $lead = Lead::find($id);
        if (!$lead) {
            return response()->json(['error' => 'Lead not found'], 404);
        }
        
        return response()->json($lead);
    }

    /**
     * Store a newly created lead.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'reviews' => 'required|integer',
            'phone' => 'required|string',
            'website' => 'required|url',
            'contacted' => 'boolean'
        ]);

        $validatedData['id'] = Str::uuid();

        $lead = Lead::create($validatedData);

        return response()->json($lead, 201);
    }

    /**
     * Update the specified lead.
     * 
     * @param \Illuminate\Http\Request $request
     * @param string $id The lead ID
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);

        $lead->update($request->all());

        return response()->json($lead);
    }

    /**
     * Remove the specified lead.
     * 
     * @param string $id The lead ID
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Lead::destroy($id);

        return response()->json(['message' => 'Lead deleted']);
    }
}