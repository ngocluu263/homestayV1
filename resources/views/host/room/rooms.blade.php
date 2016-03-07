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
                                                   
                            <td class="col-md-2">
                                <form action="{{ url('host/room/'.$room->id) }}" style='display: inline' method="POST" id="myform">
                                     <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                                </form>
                                <button class="btn btn-sm btn-danger " id="delete">
                                    <i class="fa fa-trash-o"></i>
                                        Delete
                                </button>
                            </td>
                        </tr>              
                    @endforeach
                @endif
            </table>

        </div>
    </div>

</div>
<?php echo $rooms->render(); ?>

@stop



@section('js')


    


    <script type="text/javascript">

        $('button#delete').on('click', function(){
            swal({   
            title: "Are you sure?",
            text: "You will not be able to recover this listing!",         
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!", 
            closeOnConfirm: false 
        }, 
        
        function(){   
            $("#myform").submit();
          });
        })

        

    </script>

@stop