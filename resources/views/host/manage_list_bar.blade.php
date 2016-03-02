<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav" id="myTabContent">   
        <li style="margin-top:4em;">
            <a href="#accommodation" data-toggle="tab"><i class="fa fa-fw fa-bar-chart-o"></i> Accommodation</a>
        </li>
        <li>
            <a href="#description" data-toggle="tab"><i class="fa fa-fw fa-dashboard"></i> Description</a>
        </li>
        <li>
            <a href="#location" data-toggle="tab"><i class="fa fa-fw fa-table"></i> Location</a>
        </li>
        <li>
            <a href="#calendarpricing" data-toggle="tab"><i class="fa fa-fw fa-table"></i> Calendar & Pricing</a>
        </li>
        <li>
            <a href="#amenities" data-toggle="tab"><i class="fa fa-fw fa-table"></i> Amenities</a>
        </li>
        <li>
            <a href="#photos" data-toggle="tab"><i class="fa fa-fw fa-table"></i> Photos</a>
        </li>

        <hr class="divider">

        <div class="col-md-12" style="margin-top:4em;">
            <a href="{{ url('rooms/'.$room->id.'/preview') }}"><button class="btn btn-danger">Preview Listing</button></a>
        </div>

<!--    <li>
            <a href="{{ url('host/room/'.$room->id.'/accommodation') }}"><i class="fa fa-fw fa-bar-chart-o"></i> Accommodation</a>
        </li>
        <li>
            <a href="{{ url('host/room/'.$room->id.'/location') }}"><i class="fa fa-fw fa-table"></i> Location</a>
        </li>
 -->
    </ul>
</div>
<!-- /.navbar-collapse -->
