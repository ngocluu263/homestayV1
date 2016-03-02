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


                <div class="form-group">
                    {!! Form::model($room = new \App\Room, ['url' => 'host/room/', 'class' => 'form-horizontal']) !!}
                        
                        <div class="form-group">
                            {!! Form::label('house_type', 'House Type: ', ['class' => 'control-label col-md-2']) !!}
                            <div class="col-md-4">
                                {!! Form::select('house_type', ['1' => 'House', '2' => 'Apartment', '3' => 'Condo', '4' => 'Town House', '5' => 'Other'], Auth::user()->house_type, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('room_type', 'Room Type: ', ['class' => 'control-label col-md-2']) !!}
                            <div class="col-md-4">
                                {!! Form::select('room_type', ['1' => 'Private room', '2' => 'Shared room', '3' => 'Entire house'], Auth::user()->room_type, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('city', 'City: ', ['class' => 'control-label col-md-2']) !!}
                            <div class="col-md-4">
                                {!! Form::text('city', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                {!! Form::submit('Add New Room', ['class' => 'btn btn-success form-control']) !!}
                            </div>
                        </div>
                        
                    
                    {!! Form::close() !!}
                </div>
            </div>
            
        </div>
    </div>
@stop