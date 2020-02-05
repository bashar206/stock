@extends('layouts.admin')
@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <p>Birds Eye Garments</p>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Subcategory</h5>
		  <a class="btn btn-primary" href="{{ route('allsubcat') }}" role="button">All Subcategory</a>
        </div>

        {{-- form --}}
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
	    	@if(Session::has('success'))
	        	<div class="alert alert-success"><h3>Uploaded Successfully</h3></div>
	        @endif
	        @if(Session::has('error'))
	            <div class="alert alert-danger"><h3>Uploaded Failed</h3></div>
	        @endif
            <form action="{{ route('add/subcat') }}" method="post">
            	@csrf
			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Subcategory Name</label>
			      <input type="text" class="form-control" name="subname" value="{{ old('subname') }}" placeholder="Enter Category Name" required autofocus>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Category</label>
			      <select class="form-control" name="catid" value="{{ old('catid') }}" required autofocus>
			      	@php
			      		$cat=App\Category::where('status',1)->get();
			      	@endphp
					
					<option label="Choose"></option>
			      	@foreach($cat as $data)
			        <option value="{{ $data->id }}">{{ $data->name }}</option>
					@endforeach
			      </select>
			    </div>
			    <div class="form-group col-md-4">
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



