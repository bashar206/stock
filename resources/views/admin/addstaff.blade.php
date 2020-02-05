@extends('layouts.admin')
@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <p>Birds Eye Garments</p>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Staff</h5>
		  <a class="btn btn-primary" href="{{ route('allstaff') }}" role="button">All Staff</a>
        </div>

        {{-- form --}}
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
	    	@if(Session::has('success'))
	        	<div class="alert alert-success"><h3>Uploaded Successfully</h3></div>
	        @endif
	        @if(Session::has('error'))
	            <div class="alert alert-danger"><h3>Uploaded Failed</h3></div>
	        @endif
            <form action="{{ route('add-staff') }}" method="post">
            	@csrf
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Staff Name</label>
			      <input type="text" class="form-control" name="sname" value="{{ old('sname') }}" placeholder="Enter Staff Name" required autofocus>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Staff Designation</label>
			      <input type="text" class="form-control" name="sdesig" value="{{ old('sdesig') }}" placeholder="Enter Staff Designation">
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
        {{-- form --}}

      </div><!-- sl-pagebody -->
    </div>
@endsection



