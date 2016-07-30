@extends('layouts.main')
@section('content')

<hr>
  <div class="col-sm-6 col-md-offset-3">
                 <div class="panel-box">
                     <h4>Create New Agents</h4>
                     {!! Form::open(array('route' => 'agents.store')) !!}

                     {{Form::label('name','Agents Name:')}}
                     {{Form::text('name',null,array('class'=>'form-control'))}}
                     <br>

                           {{Form::label('gender','Gender?')}}
                           <span class="Form-label-text">Male</span>
                           <input type="radio" value="Male" name="gender" >
                           <span class="Form-label-text">Female</span>
                           <input type="radio" value="Female" name="gender" >
                        
                      <br>
                     {{Form::label('number','Agents Number:')}}
                     {{Form::number('number',null,array('class'=>'form-control'))}}
                     {{Form::label('phone','Agents Phone:')}}
                     {{Form::number('phone',null,array('class'=>'form-control'))}}
                     {{Form::label('address','Agents Address:')}}
                     {{Form::text('address',null,array('class'=>'form-control'))}}
                     {{Form::label('bank_distance','Bank Distance:')}}
                     {{Form::text('bank_distance',null,array('class'=>'form-control'))}}
                     {{Form::label('bank','Bank Freguency:')}}
                     {{Form::text('bank',null,array('class'=>'form-control'))}}

                      {{Form::submit('Create Agent',array('class' =>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
                     {!! Form::close() !!}

                 </div>
               </div>

  @endsection
