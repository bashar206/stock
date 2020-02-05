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
          <h5>Update Category</h5>
		  <a class="btn btn-primary" href="{{ route('allcategory') }}" role="button">All Category</a>
		  <a class="btn btn-primary" href="{{ route('addcategory') }}" role="button">Add Category</a>
        </div>

        {{-- form --}}
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
	    	@if(Session::has('success'))
	        	<div class="alert alert-success"><h3>Updated Successfully</h3></div>
	        @endif
	        @if(Session::has('error'))
	            <div class="alert alert-danger"><h3>Updated Failed</h3></div>
	        @endif
            <form action="{{ url('update/category/'.$edit->id) }}" method="post">
            	@csrf
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Category Name</label>
			      <input type="text" class="form-control" name="name" value="{{ $edit->name }}">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Status</label>
			      <select class="form-control" name="status" value="{{ $edit->status }}">
			        @if($edit->status==1)
			        <option value="1">Active</option>
			        <option value="0">Inactive</option>
			        @endif
			        @if($edit->status==0)
			        <option value="0">Inactive</option>
			        <option value="1">Active</option>
			        @endif
			      </select>
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Update</button>
			</form>
        </div>
        {{-- form --}}

      </div>
    </div>
@endsection



