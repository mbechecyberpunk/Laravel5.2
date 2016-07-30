@extends('layouts.main')
@section('content')
                        <div class="widget-row">
                            <div class="row">

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="widget-box clearfix">
                                                <div>
                                                    <h4>Total Agents</h4>
                                                    <h2>{{$users}}<i class="fa fa-user pull-right"></i></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget-box clearfix">
                                                <div>
                                                    <h4>Agents Visited</h4>
                                                    <h2>{{$visited}} <i class="fa fa-user pull-right"></i></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget-box clearfix">
                                                <div>
                                                    <h4>Compliant</h4>
                                                    <h2>256 <i class="fa fa-user pull-right"></i></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget-box clearfix">
                                                <div>
                                                    <h4>Non Compliant</h4>
                                                    <h2>97 <i class="fa fa-user pull-right"></i></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div><!--end widget-->


                                    <div class="row">
                            <div class="col-sm-12">
                          <div class="col-md-2">
                           <a href="{{route('agents.create')}}" class="btn btn-primary">New Agent</a>
                         </div>
                         <hr>
                                <div class="panel-box">
                                              <div class="table-responsive">
                                          <table id="basic-datatables" class="table table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Agent Number</th>
                                                <th>Agent Name</th>
                                                <th>Agent Phone</th>
                                                <th>Agent Address</th>
                                                <th>Action</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <?php $i =1; ?>
                                       @foreach($agents as $agent)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$agent->number}}</td>
                                                <td>{{$agent->name}}</td>
                                                <td>{{$agent->phone}}</td>
                                                <td>{{$agent->address}}</td>
                                                <td><a href="{{route('agents.edit',$agent->id)}}" class="btn btn-primary btn-sm">Edit</a></td>

                                            </tr>
                                            <?php $i++; ?>

                                         @endforeach
                                         </tbody>
                                       </table>


                                  </div>













                      @endsection
