<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadStatusController extends Controller
{
    /**
     * Get leads counts grouped by status
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStatusCounts()
    {
        $statusCounts = Lead::select('status')
            ->selectRaw('count(*) as count')
            ->groupBy('status')
            ->get()
            ->pluck('count', 'status')
            ->toArray();
            
        // Ensure all statuses are included even if they have no leads
        $allStatuses = ['New', 'Contacted', 'Qualified', 'Converted', 'Lost'];
        $result = [];
        
        foreach ($allStatuses as $status) {
            $result[$status] = $statusCounts[$status] ?? 0;
        }
        
        return response()->json($result);
    }
    
    /**
     * Get leads filtered by status
     * 
     * @param string $status The lead status to filter by
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLeadsByStatus($status)
    {
        $validStatuses = ['New', 'Contacted', 'Qualified', 'Converted', 'Lost'];
        
        if (!in_array($status, $validStatuses)) {
            return response()->json([
                'error' => 'Invalid status. Valid values are: ' . implode(', ', $validStatuses)
            ], 400);
        }
        
        $leads = Lead::where('status', $status)->get();
        
        return response()->json($leads);
    }
    
    /**
     * Update lead status
     * 
     * @param Request $request
     * @param string $id The lead ID
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateStatus(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|string|in:New,Contacted,Qualified,Converted,Lost',
        ]);
        
        $lead = Lead::findOrFail($id);
        $lead->status = $validatedData['status'];
        
        // If status is changed to Contacted, also update the contacted flag
        if ($validatedData['status'] === 'Contacted' || $validatedData['status'] === 'Qualified' || 
            $validatedData['status'] === 'Converted') {
            $lead->contacted = true;
        }
        
        $lead->save();
        
        return response()->json($lead);
    }
}