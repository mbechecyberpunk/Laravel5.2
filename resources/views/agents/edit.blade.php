
  @extends('layouts.main')
@section('content')
            <div class="row">
              {!!Form::model($agent,['route'=>['agents.update',$agent->id],'method'=>'PUT']) !!}
              <div class="col-md-6 col-md-offset-3 ">
                {{Form::label('number','Agents Number:')}}
                {{Form::number('number',null,array('class'=>'form-control'))}}
                {{Form::label('name','Agents Name:')}}
                {{Form::text('name',null,array('class'=>'form-control'))}}
                {{Form::label('phone','Agents Phone:')}}
                {{Form::number('phone',null,array('class'=>'form-control'))}}
                {{Form::label('address','Agents Address:')}}
                {{Form::text('address',null,array('class'=>'form-control'))}}
                {{Form::label('bank_distance','Bank Distance:')}}
                {{Form::text('bank_distance',null,array('class'=>'form-control'))}}
                {{Form::label('bank','Bank Freguency:')}}
                {{Form::text('bank',null,array('class'=>'form-control'))}}

                {{Form::submit('Edit Agent',array('class' =>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
                {!! Form::close() !!}

@endsection
