@extends('layouts.admin')
@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Tables</a>
        <span class="breadcrumb-item active">Category Table</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Category</h5>
		  <a class="btn btn-primary" href="{{ route('allcategory') }}" role="button">All Category</a>
        </div>

        {{-- form --}}
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
	    	@if(Session::has('success'))
	        	<div class="alert alert-success"><h3>Uploaded Successfully</h3></div>
	        @endif
	        @if(Session::has('error'))
	            <div class="alert alert-danger"><h3>Uploaded Failed</h3></div>
	        @endif
            <form action="{{ url('add/category') }}" method="post">
            	@csrf
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Category Name</label>
			      <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Category Name" required autofocus>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Status</label>
			      <select class="form-control" name="status" value="{{ old('status') }}" required autofocus>
			        <option label="Choose"></option>
			        <option value="1">Active</option>
			        <option value="0">Inactive</option>
			      </select>
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
        {{-- form --}}

      </div><!-- sl-pagebody -->
    </div>
@endsection



