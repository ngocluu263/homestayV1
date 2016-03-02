<!-- Accommodation tab begin-->
<div class="tab-pane fade" id="amenities">
	<h3>  Tell travelers about your space </h3>

    <hr class="divider">

    @include('flash')
	

    {!! Form::model($room, ['url' => '/host/room/update_amenities', 'class' => 'form-horizontal']) !!}
    {!! Form::hidden('user_id', $room->id) !!}

  <!-- Daily services row begin -->
  <div class="row">
      <div class="col-md-3">
          <h4>Services</h4>
      </div>

      <div class="col-md-9">
          <div class="form-group">
              <div>
                  {!! Form::checkbox('amenities[]', 'Meals', in_array('Meals', $room->amenities)) !!}   
                  {!! Form::label('amenities', 'Meals', ['class' => 'control-label']) !!}              
              </div>
              <div>
                  {!! Form::checkbox('amenities[]', 'Transportation', in_array('Transportation', $room->amenities)) !!}   
                  {!! Form::label('amenities', 'Transportation', ['class' => 'control-label']) !!}                          
              </div>
              <div>
                  {!! Form::checkbox('amenities[]', 'Language lesson', in_array('Language lesson', $room->amenities)) !!}   
                  {!! Form::label('amenities', 'Language lesson', ['class' => 'control-label']) !!}                          
              </div>
              <div>
                  {!! Form::checkbox('amenities[]', 'Airport pick-up', in_array('Airport pick-up', $room->amenities)) !!}   
                  {!! Form::label('amenities', 'Airport pick-up', ['class' => 'control-label']) !!}                          
              </div>
              <div>
                  {!! Form::checkbox('amenities[]', 'Legal guardianship', in_array('Legal guardianship', $room->amenities)) !!}   
                  {!! Form::label('amenities', 'Legal guardianship', ['class' => 'control-label']) !!}                          
              </div>
          </div>

      </div>
  </div>
  <!-- daily services row end -->

  <hr class="divider">

  <!-- Common row begin -->
  <div class="row">
      <div class="col-md-3">
          <h4>Common</h4>
      </div>

      <div class="col-md-9 form-group">

          <div>
              {!! Form::checkbox('amenities[]', 'Tv', in_array('Tv', $room->amenities)) !!}   
              {!! Form::label('amenities', 'Tv', ['class' => 'control-label']) !!}                          
          </div>
          <div>
              {!! Form::checkbox('amenities[]', 'Air Conditioning', in_array('Air Conditioning', $room->amenities)) !!}   
              {!! Form::label('amenities', 'Air Conditioning', ['class' => 'control-label']) !!}                          
          </div>
          <div>
              {!! Form::checkbox('amenities[]', 'Heating', in_array('Heating', $room->amenities)) !!}   
              {!! Form::label('amenities', 'Heating', ['class' => 'control-label']) !!}                          
          </div>
          <div>
              {!! Form::checkbox('amenities[]', 'Kitchen', in_array('Kitchen', $room->amenities)) !!}   
              {!! Form::label('amenities', 'Kitchen', ['class' => 'control-label']) !!}                          
          </div>
          <div>
              {!! Form::checkbox('amenities[]', 'Washer', in_array('Washer', $room->amenities)) !!}   
              {!! Form::label('amenities', 'Wahser', ['class' => 'control-label']) !!}                          
          </div>
          <div>
              {!! Form::checkbox('amenities[]', 'Dryer', in_array('Dryer', $room->amenities)) !!}   
              {!! Form::label('amenities', 'Dryer', ['class' => 'control-label']) !!}                          
          </div>
          <div>
              {!! Form::checkbox('amenities[]', 'Internet', in_array('Internet', $room->amenities)) !!}   
              {!! Form::label('amenities', 'Internet', ['class' => 'control-label']) !!}                          
          </div>
          <div>
              {!! Form::checkbox('amenities[]', 'Wifi', in_array('Wifi', $room->amenities)) !!}   
              {!! Form::label('amenities', 'Wifi', ['class' => 'control-label']) !!}                          
          </div>

      </div>
  </div>
  <!-- Common row end -->  

  <hr class="divider">

  <!-- Extras row begin -->
  <div class="row">
      <div class="col-md-3">
          <h4>Extras</h4>
      </div>

      <div class="col-md-9">
          <div class="form-group">
              <div>
                  {!! Form::checkbox('amenities[]', 'Pool', in_array('Pool', $room->amenities)) !!}   
                  {!! Form::label('amenities', 'Pool', ['class' => 'control-label']) !!}                         
              </div>     
              <div>
                  {!! Form::checkbox('amenities[]', 'Gym', in_array('Gym', $room->amenities)) !!}   
                  {!! Form::label('amenities', 'Gym', ['class' => 'control-label']) !!}                          
              </div>
              <div>
                  {!! Form::checkbox('amenities[]', 'Elevator', in_array('Elevator', $room->amenities)) !!}   
                  {!! Form::label('amenities', 'Elevator', ['class' => 'control-label']) !!}                          
              </div>
              <div>
                  {!! Form::checkbox('amenities[]', 'Indoor Fireplace', in_array('Indoor Fireplace', $room->amenities)) !!}   
                  {!! Form::label('amenities', 'Indoor Fireplace', ['class' => 'control-label']) !!}                          
              </div>
              <div>
                  {!! Form::checkbox('amenities[]', 'Free Parking on Premises', in_array('Free Parking on Premises', $room->amenities)) !!}   
                  {!! Form::label('amenities', 'Free Parking on Premises', ['class' => 'control-label']) !!}                          
              </div>
          </div>
      </div>
  </div>
  <!-- Extras row end -->

  <hr class="divider">

  {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
  {!! Form::close() !!}

</div>
<!-- Accommodation tab end -->