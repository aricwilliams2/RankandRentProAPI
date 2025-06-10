<?php

// app/Http/Controllers/LeadController.php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LeadController extends Controller
{
    public function index()
    {
        return response()->json(Lead::all());
    }

    public function show($id)
    {
        return response()->json(Lead::findOrFail($id));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'reviews' => 'required|integer',
            'phone' => 'required|string',
            'website' => 'required|url',
            'contacted' => 'boolean'
        ]);

        $data['id'] = Str::uuid();

        $lead = Lead::create($data);

        return response()->json($lead, 201);
    }

    public function update(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);

        $lead->update($request->all());

        return response()->json($lead);
    }

    public function destroy($id)
    {
        Lead::destroy($id);

        return response()->json(['message' => 'Lead deleted']);
    }
}
