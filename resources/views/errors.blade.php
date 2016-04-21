
@if ($errors->any())
    <div class="alert alert-danger" >
	@foreach ($errors->all() as $error)
	    <div class="row">
		<div class="col-md-12">
		    {{ $error }}
		</div>
	    </div>
	@endforeach
    </div>
@endif
