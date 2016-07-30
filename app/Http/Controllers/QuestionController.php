<?php

namespace  App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;
use App\Agent;
use Session;
use DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $questions = DB::table('agents')
            ->join('questions', 'agents.id', '=', 'questions.agents_id')
            ->select('agents.*', 'questions.floats', 'questions.cash','questions.book_keeping','questions.adverts','questions.price')
            ->get();
        return view('questions.index')->with('questions',$questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $agents=Agent::all();
       return view('questions.create')->with('agents',$agents);
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
       'agents_id' => 'required',
       'floats' => 'required',
       'cash' => 'required',
       'book_keeping' => 'required',
       'adverts' => 'required',
       'gender' => 'required',
          ));

      $question=new Question;
      $question->agents_id=$request->agents_id;
      $question->floats=$request->floats;
      $question->cash=$request->cash;
      $question->book_keeping=$request->book_keeping;
      $question->adverts=$request->adverts;
      $question->gender=$request->gender;
      $q1=$request->book_keeping;
      if($q1=="YES"){
        $q1=5;
      }
      else {
      $q1=2;
      }
      $q2=$request->adverts;
      if($q2=="YES"){
        $q2=5;
      }
      else {
      $q2=2;
      }
      $result=$q1+$q2;
      $question->price=$result;
      $question->save();
      Session::flash('success','The visit was successfully added!!');


      return redirect()->route('questions.index');



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
        //
    }
}
