<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Agent;
use Session;
use DB;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $agents=Agent::all();
        $users = DB::table('agents')->count();
        $visited = DB::table('questions')->count();

        return view('agents.index')->with('agents',$agents)->with('users',$users)->with('visited',$visited);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
          'number'=>'required',
          'gender'=>'required',
          'name'=>'required|max:255',
           'phone'=>'required',
           'address'=>'required',
           'bank_distance'=>'required',
           'bank'=>'required',
  ));

  $agent=new Agent;
  $agent->number=$request->number;
  $agent->gender=$request->gender;
  $agent->name=$request->name;
  $agent->phone=$request->phone;
  $agent->address=$request->address;
  $agent->bank_distance=$request->bank_distance;

  $agent->bank=$request->bank;

  $agent->save();
  Session::flash('success','The Agent was successfully added!!');


  return redirect()->route('agents.index');



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
        $agent=Agent::find($id);
        return view('agents.edit')->with('agent',$agent);
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
      $this->validate($request,array(
        'number'=>'required',
        'name'=>'required|max:255',
         'phone'=>'required',
         'address'=>'required',
         'bank_distance'=>'required',
         'bank'=>'required',
));

$agent=Agent::find($id);
$agent->number=$request->number;
$agent->name=$request->name;
$agent->phone=$request->phone;
$agent->address=$request->address;
$agent->bank_distance=$request->bank_distance;

$agent->bank=$request->bank;

$agent->save();
Session::flash('success','The Agent was successfully added!!');


return redirect()->route('agents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
