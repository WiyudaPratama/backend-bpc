<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $statusPending = Transaction::where('transaction_status', 'PENDING')->count();
        $statusSuccess = Transaction::where('transaction_status', 'SUCCESS')->count();
        $member = User::with(['member'])->where('role', 'USER')->count();
        $pengurus = User::with('admin')->where('role', 'ADMIN')->count();
        return view('admin.dashboard', compact(
            'statusPending', 'statusSuccess', 'member', 'pengurus'
        ));
    }
}
