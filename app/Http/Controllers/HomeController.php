<?php

namespace App\Http\Controllers;

use App\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $isProposalBeingProcessed = false;

        if (Auth::user() != null) {
            $userId = Auth::user()->id;

            $userProposal = Proposal::where('user_id', $userId)->first();
            // dd($userProposal);
            if ($userProposal) {
                // if ($userProposal->sk_cpns_acc == null || $userProposal->sk_pns_acc == null || $userProposal->sttpl_acc == null || $userProposal->photo_acc == null || $userProposal->is_dicetak == null || $userProposal->is_diambil == null) {
                //     $isProposalBeingProcessed = true;
                // }
                if ($userProposal->is_diambil == null) {
                    $isProposalBeingProcessed = true;
                }
            }
        }

        // return view('home');
        return view('visitor.landing.home', compact('isProposalBeingProcessed'));
    }
}
