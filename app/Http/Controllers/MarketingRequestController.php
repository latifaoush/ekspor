<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as CoconutRequest;

class MarketingRequestController extends Controller
{
    public function index()
    {
        return view('requestmarketing', ['requests' => CoconutRequest::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required|string',
            'quantity' => 'required|integer',
        ]);

        CoconutRequest::create([
            'product' => $request->product,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('marketing.requests');
    }

    public function destroy(CoconutRequest $coconutRequest)
    {
        // Menghapus request kelapa
        $coconutRequest->delete();

        // Redirect ke halaman request marketing
        return redirect()->route('marketing.requests')->with('success', 'Request berhasil dihapus');
    }
}
