<!-- Photos tab begin-->
<div class="tab-pane fade" id="photos">
    <div class="container">
        <div class="dropzone" id="dropzoneFileUpload">
        </div>
    </div>
</div>

<div class="row">

	<div class="col-md-12">
		@foreach ($room->photos as $photo)
			<img src="{{ $photo->path }}">
		@endforeach
	</div>

</div>
<!-- Photos tab end -->

