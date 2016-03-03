@extends('host.host-master')

@section('title')
    Your Listings - TP
@stop

@section('content')

<div class="row">

    @include('host.listing_bar')

    <div class="col-md-7">
        <div class="panel panel-default">
            
            <div class="panel-heading">
               <h4>Your Listings: {{ $count }}</h4>
            </div>

            @include('errors.list')

            <table class="table table-striped" id="sortTable">

                @if (count($rooms))
                    @foreach ($rooms as $room)

                        <tr>               
                            <td class="col-md-3">
                                <a href="{{ url('rooms/'.$room->id) }}" >
                                    <img src="/images/public/mac.jpg" alt="..." class="img-thumbnail">
                                </a>
                            </td>
                            
                                <td class="col-md-6">
                                    <a href="{{ url('rooms/'.$room->id) }}" >
                                        <h4>{{ $room->room_type }} in {{ $room->city }}</h4>
                                    </a> 
                                    <div>{{ $room->title }}</div>
                                    <div>{{ $room->title }}</div>
                                </td>  
                                                   
                            <td class="col-md-3">
                                <form action="{{ url('host/room/'.$room->id) }}" style='display: inline' method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('确定删除?')">Delete</button>
                                </form>
                            </td>
                        </tr>              


                    @endforeach
                @else
                    <h3>
                        <a href="/host/room/create"><button class="btn btn-danger btn-sm">Add New Listings</button></a>
                    </h3>
                @endif
            </table>

        </div>
    </div>

</div>
<?php echo $rooms->render(); ?>

@stop