<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use App\Members;
use App\Funds;
use App\payment;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        
        $collection = Agent::groupBy('District')
        ->selectRaw('count(*) as total, District')
        ->get();


        return view('home')
        ->with('Available', Members::count())
        ->with('Agents_Available', Agent::count())
        ->with('View_Agents', Agent::all())
        ->with('View_members',Members::all())
        ->with('collection',$collection)
        ->with('Funds', Funds::sum('Amount'))
        ->with('View_Funds', Funds::all());
    }

    
    public function payed()
    {
         

        return view('payment')
       
        ->with('Paying', payment::all())
        ->with('View_Agents', Agent::all());
        
        
        }
       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Agent $agents)
    {
        $agents->Name=$request->Name;
        $agents->Position=$request->Position;
        $agents->District=$request->district;
        //$agents->Amount=$request->amount;
        //$agents->status=$request->status;
        $agents->Gender=$request->Gender;
        $agents->signature=$request->signature;
        $agents->save();
        return redirect()->route('home.index');
    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
      Agent::destroy($id);
      return redirect()->route('home.index');
        
    }
}
