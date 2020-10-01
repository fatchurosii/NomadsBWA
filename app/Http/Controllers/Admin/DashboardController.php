<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;
use App\TravelPackage;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view ('pages.admin.dashboard',[
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::with('transaction_status','PENDING')->count(),
            'transaction_success' => Transaction::with('transaction_status','SUCCESS')->count()

        ]);
    }
}
