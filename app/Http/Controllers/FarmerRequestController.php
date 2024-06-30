<?php

// App\Http\Controllers\FarmerRequestController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as CoconutRequest;
use Illuminate\Support\Facades\Auth;

class FarmerRequestController extends Controller
{
    public function index()
    {
        $farmerId = Auth::id();
        $requests = CoconutRequest::where(function ($query) use ($farmerId) {
            $query->where('status', 'pending')
                ->orWhere('farmer_id', $farmerId);
        })->get();

        return view('requestpetani', ['requests' => $requests]);
    }

    public function update(Request $request, CoconutRequest $coconutRequest)
    {
        $request->validate([
            'status' => 'required|in:accepted,declined',
        ]);

        $status = $request->status;
        $farmerId = $status == 'accepted' ? Auth::id() : null;

        $coconutRequest->update([
            'status' => $status,
            'farmer_id' => $farmerId
        ]);

        return redirect()->route('farmer.requests');
    }

    
}
