@extends('layouts.main')
@section('content')
  <div class="row">
<div class="col-sm-12">
<div class="col-md-2">
<a href="{{route('questions.create')}}" class="btn btn-primary">New Visits</a>
</div>
<hr>

<div class="panel-box">
            <div class="table-responsive">
        <table id="basic-datatables" class="table table-bordered" cellspacing="0" width="100%">
      <thead>
          <tr>
              <th>No</th>
              <th>Agent Name</th>
              <th>Agent Float</th>
              <th>Agent Cash</th>
              <th>Book Keeping</th>
              <th>Adverts</th>
              <th>Agent Score</th>
              <th>Result</th>
              <th>Visited Date</th>

        </tr>
      </thead>
      <tbody>
        <?php $i =1; ?>
     @foreach($questions as $question)
          <tr>
              <td>{{$i}}</td>
              <td>{{$question->name}}</td>
              <td>{{$question->floats}}</td>
              <td>{{$question->cash}}</td>
              <td>{{$question->book_keeping}}</td>
              <td>{{$question->adverts}}</td>
              <td>{{$score=$question->price}}</td>
              <td>@if( $score > 4)Compliant @else Non-Compliant @endif
              <td>{{date('M j,Y',strtotime($question->created_at))}}</td>




          </tr>
          <?php $i++; ?>

       @endforeach
       </tbody>
     </table>

@endsection
