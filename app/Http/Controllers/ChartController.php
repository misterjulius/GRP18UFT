<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funds;
use App\Agent;
use App\payment;
use App\Members;

class ChartController extends Controller
{
    //
    public function CreateChart(){
        return view('graph')
        ->with('View_Funds', Funds::all())
        ->with('Paying', payment::all())
        ->with('MonthNames', Members::all())
        ->with('View_Agents', Agent::all());
    }
    public function FundBYWell(){
        return view('fundBYwell')
        ->with('View_Funds', Funds::all())
        ->with('Paying', payment::all())
        ->with('View_Agents', Agent::all());
    }
    public function createlevelchart()
    {
        $collection = Agent::groupBy('District')
        ->selectRaw('count(*) as total, District')
        ->get();
        return view('level')
        ->with('Agenthead', Agent::where('Position','LIKE','Agent Head')->count())
        ->with('Agent', Agent::where('Position','LIKE','Agent')->count())
        ->with('members', Members::count());
        
    }
    public function progressTrack(){
        return view('progress')
        ->with('View_Members', Funds::all());
      
    }
}
