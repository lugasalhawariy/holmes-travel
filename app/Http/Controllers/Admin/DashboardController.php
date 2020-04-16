<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// DATA TAMBAHAN
use App\Transaction;
use App\TravelPackage;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'user' => Auth::user()->count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count(),
        ]);
    }
}
