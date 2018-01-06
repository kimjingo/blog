@if(count($errors))
  <div class="form-group">
  	
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $msg)

				<li>{{ $msg }}</li>

			@endforeach
		</ul>
	</div>

  </div>
@endif