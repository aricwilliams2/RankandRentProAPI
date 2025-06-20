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
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $query = Lead::query();
        
        // Filter by status if provided
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }
        
        // Search by name or company
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('company', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%");
            });
        }
        
        // Sort
        $sortBy = $request->input('sort_by', 'created_at');
        $sortDir = $request->input('sort_dir', 'desc');
        $query->orderBy($sortBy, $sortDir);
        
        // Paginate results
        $perPage = $request->input('per_page', 15);
        $leads = $query->paginate($perPage);
        
        return response()->json($leads);
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
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:255',
            'status' => 'nullable|string|in:New,Contacted,Qualified,Converted,Lost',
            'notes' => 'nullable|string',
            'reviews' => 'nullable|integer',
            'website' => 'nullable|url|max:255',
            'contacted' => 'boolean'
        ]);

        // Set default values if not provided
        $validatedData['id'] = Str::uuid();
        $validatedData['status'] = $validatedData['status'] ?? 'New';
        
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

        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|nullable|email|max:255',
            'phone' => 'sometimes|string|max:20',
            'company' => 'sometimes|nullable|string|max:255',
            'status' => 'sometimes|string|in:New,Contacted,Qualified,Converted,Lost',
            'notes' => 'sometimes|nullable|string',
            'reviews' => 'sometimes|integer',
            'website' => 'sometimes|nullable|url|max:255',
            'contacted' => 'sometimes|boolean'
        ]);

        $lead->update($validatedData);

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
        $lead = Lead::findOrFail($id);
        $lead->delete();

        return response()->json(['message' => 'Lead deleted successfully']);
    }
}