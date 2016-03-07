@extends('host.host-master')

@section('title')
    Rent Out Your Room on TP
@stop


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>List Your Space</h3>
                <hr />

                @include('errors.list')

                <div class="row">

<!-- 


  


                    
    <button type="button" class="button button-primary">Option 2</button>
    <button type="button" class="button button-primary">Option 3</button>
     
     <span class="button-dropdown button-dropdown-primary" data-buttons="dropdown">
      <a href="#" class="button button-primary"> Select Me <i class="fa fa-caret-down"></i></a>
 
      <ul class="button-dropdown-list is-below">
        <li><a href="http://www.bootcss.com/">Option Link 1</a></li>
        <li><a href="http://www.bootcss.com/">Option Link 2</a></li>
        <li class="button-dropdown-divider"><a href="#">Option Link 3</a></li>
      </ul>
    </span>

      <span class="button-dropdown" data-buttons="dropdown">
    
    <button class="button button-rounded">
      Select Me <i class="fa fa-caret-down"></i>
    </button>
 
    <ul class="button-dropdown-list">
      <li><a href="http://www.bootcss.com/">Option Link 1</a></li>
      <li><a href="http://www.bootcss.com/">Option Link 2</a></li>
      <li class="button-dropdown-divider">
        <a href="#">Option Link 3</a>
      </li>
    </ul>
  </span>

 -->


                    <div class="col-md-6">
                        {!! Form::model($room = new \App\Room, ['url' => 'host/room/', 'class' => 'form-horizontal']) !!}
                            
                            <div class="row">
                                <div class="col-md-12">                                                                                                  
                                    {!! Form::label('house_type', 'House Type: ', ['class' => 'control-label']) !!}
                                    {!! Form::select('house_type', ['1' => 'House', '2' => 'Apartment', '3' => 'Condo', '4' => 'Other'], Auth::user()->room_type, ['class' => 'form-control', 'data-toggle' => 'tooltip', 'title' => 'Choose the type of your space']) !!}
                                </div>
                  
                                <div class="col-md-12">
                                    {!! Form::label('room_type', 'Room Type: ', ['class' => 'control-label']) !!}
                                    {!! Form::select('room_type', ['1' => 'Private room', '2' => 'Shared room', '3' => 'Entire house'], Auth::user()->room_type, ['class' => 'form-control']) !!}
                                </div>
                     
                                <div class="col-md-12">
                                    {!! Form::label('city', 'City: ', ['class' => 'control-label']) !!}
                                    {!! Form::text('city', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="col-md-6">
                                    <hr class="divider">
                                    {!! Form::submit('Add New Room', ['class' => 'button button-3d button-primary button-rounded']) !!}
                                </div>
                            </div>
                        
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@stop