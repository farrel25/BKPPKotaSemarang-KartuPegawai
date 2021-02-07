<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Proposal;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countEmployees = Employee::count();
        $countUsers = User::count();
        $countProposals = Proposal::count();

        if ($countProposals == 0) {
            $countProposalFinished = 0;
            $percentageProposalFinished = 0;

            $countProposalPrinted = 0;
            $percentageProposalPrinted = 0;

            $countProposalProcess = 0;
            $percentageProposalProcess = 0;

            $countProposalIn = 0;
            $percentageProposalIn = 0;
        } else {
            $countProposalFinished = Proposal::where('is_diambil', 1)->count();
            $percentageProposalFinished = number_format((($countProposalFinished / $countProposals) * 100), 2);

            $countProposalPrinted = Proposal::where('is_dicetak', 1)->where('is_diambil', null)->count();
            $percentageProposalPrinted = number_format((($countProposalPrinted / $countProposals) * 100), 2);

            $countProposalProcess = Proposal::where([
                ['sk_cpns_acc', '=', '1'],
                ['sk_pns_acc', '=', '1'],
                ['sttpl_acc', '=', '1'],
                ['photo_acc', '=', '1'],
                ['is_dicetak', '=', null],
                ['is_diambil', '=', null],
            ])->count();
            $percentageProposalProcess = number_format((($countProposalProcess / $countProposals) * 100), 2);

            $countProposalIn = Proposal::where([
                ['sk_cpns_acc', '=', null],
                ['sk_pns_acc', '=', null],
                ['sttpl_acc', '=', null],
                ['photo_acc', '=', null],
                ['is_dicetak', '=', null],
                ['is_diambil', '=', null],
            ])->count();
            $percentageProposalIn = number_format((($countProposalIn / $countProposals) * 100), 2);
        }


        return view('dashboard.main.index', compact(
            'countEmployees',
            'countUsers',
            'countProposals',
            'countProposalFinished',
            'percentageProposalFinished',
            'countProposalPrinted',
            'percentageProposalPrinted',
            'countProposalProcess',
            'percentageProposalProcess',
            'countProposalIn',
            'percentageProposalIn',
        ));
    }
}
