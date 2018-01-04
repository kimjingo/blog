@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
	
	<h1>Input your comment</h1>
	<hr>
		<form method='POST' action='/posts'>
			{{csrf_field()}}
		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="Title" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter Title">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your Title with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="body">Body</label>
		    <input type="Textarea" class="form-control" id="body" name="body" placeholder="Text">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>
@endsection


@section('layouts.footer')

<script type="text/javascript"></script>

@endsection
