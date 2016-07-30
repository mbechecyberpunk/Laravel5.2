@extends('layouts.main')
@section('content')
  <div class="col-sm-6 col-md-offset-3">
                 <div class="panel-box">
                     <h4>Agents Visits</h4>
                     {!! Form::open(array('route' => 'questions.store','data-parsley-validate'=>'')) !!}
                     {{Form::label('agents_id','Agents:')}}
                     <select class="form-control" name="agents_id" 'required'=>''>
                    @foreach($agents as $agent)
                        <option value="{{$agent->id}}">{{$agent->name}}</option>
                    @endforeach
                     </select>
                     {{Form::label('floats','Float:')}}
                     {{Form::number('floats',null,array('class'=>'form-control','required'=>''))}}

                     {{Form::label('cash','Cash at Hand:')}}
                     {{Form::number('cash',null,array('class'=>'form-control','required'=>''))}}

                     <br>
                     <div class="form-control style'=>'margin-top:20px;'" >
                      {{Form::label('book_keeping','Do you do any book keeping?')}}
                      <span class="Form-label-text">YES</span>
                      <input type="radio" value="YES" name="book_keeping">
                      <span class="Form-label-text">No</span>
                      <input type="radio" value="No" name="book_keeping" >
                    </div>
                   <br>
                 <div class="form-control style'=>'margin-top:20px;'">
                       {{Form::label('adverts','Do you do any adverts?')}}
                       <span class="Form-label-text">YES</span>
                       <input type="radio" value="YES" name="adverts" >
                       <span class="Form-label-text">No</span>
                       <input type="radio" value="No" name="adverts" >
                     </div>





                      {{Form::submit('Create Visit',array('class' =>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
                     {!! Form::close() !!}

                 </div>
               </div>

@endsection
