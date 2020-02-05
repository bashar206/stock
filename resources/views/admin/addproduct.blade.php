@extends('layouts.admin')
@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <p>Birds Eye Garments</p>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Product</h5>
		  <a class="btn btn-primary" href="{{ route('allproduct') }}" role="button">All Products</a>
        </div>

        {{-- form --}}
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
	    	@if(Session::has('success'))
	        	<div class="alert alert-success"><h3>Uploaded Successfully</h3></div>
	        @endif
	        @if(Session::has('error'))
	            <div class="alert alert-danger"><h3>Uploaded Failed</h3></div>
	        @endif
            <form action="{{ url('add/product/submit') }}" method="post" enctype="multipart/form-data">
            	@csrf
			  <div class="form-row">
			  	<div class="form-group col-md-2">
			      <label for="inputEmail4">Purchase Date*</label>
			      <input type="date" class="form-control" name="purdate" value="{{ old('purdate') }}" required autofocus>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Code*</label>
			      <input type="text" class="form-control" name="pcode" value="{{ old('pcode') }}" required autofocus>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputPassword4">Sample Image (.jpg /.png)</label>
			      <input type="file" class="form-control" name="pimg" value="{{ old('pimg') }}">
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputPassword4">Product Type*</label>
			      <select class="form-control" name="subcatid" value="{{ old('subcatid') }}" required autofocus>
			      	@php
			      		$cat=App\Subcat::where('status',1)->get();
			      	@endphp
					
					<option label="Choose"></option>
			      	@foreach($cat as $data)
			        <option value="{{ $data->id }}">{{ $data->subname }}</option>
					@endforeach
			      </select>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Yard*</label>
			      <input type="text" class="form-control" name="yard" value="{{ old('yard') }}" required autofocus>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Amount*</label>
			      <input type="text" class="form-control" name="amount" value="{{ old('amount') }}" required autofocus>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Size (15.5)</label>
			      <input type="text" class="form-control" name="ks" value="{{ old('ks') }}">
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Size (16)</label>
			      <input type="text" class="form-control" name="kss" value="{{ old('kss') }}">
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Size (16.5)</label>
			      <input type="text" class="form-control" name="ksss" value="{{ old('ksss') }}">
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Total Product*</label>
			      <input type="text" class="form-control" name="total" value="{{ old('total') }}" required autofocus>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Swing By*</label>
			      <select class="form-control" name="staffid" value="{{ old('staffid') }}" required autofocus>
			      	@php
			      		$staff=App\Staff::all();
			      	@endphp
					
					<option label="Choose"></option>
			      	@foreach($staff as $data)
			        <option value="{{ $data->id }}">{{ $data->sname }}</option>
					@endforeach
			      </select>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Swing Date*</label>
			      <input type="date" class="form-control" name="swdate" value="{{ old('swdate') }}" required autofocus>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Kolor*</label>
			      <select class="form-control" name="skolor" value="{{ old('skolor') }}" required autofocus>
			      	@php
			      		$staffkol=App\Staff::all();
			      	@endphp
					
					<option label="Choose"></option>
			      	@foreach($staffkol as $data)
			        <option value="{{ $data->sname }}">{{ $data->sname }}</option>
					@endforeach
			      </select>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Finished Amount*</label>
			      <input type="text" class="form-control" name="famount" value="{{ old('famount') }}" required autofocus>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Finished Date*</label>
			      <input type="date" class="form-control" name="fdate" value="{{ old('fdate') }}" required autofocus>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Finishing Product Image (.jpg /.png)</label>
			      <input type="file" class="form-control" name="fpimg" value="{{ old('fpimg') }}">
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Cartoon*</label>
			      <input type="text" class="form-control" name="cartoon" value="{{ old('cartoon') }}" required autofocus>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputEmail4">Show Room*</label>
			      <input type="text" class="form-control" name="sroom" value="{{ old('sroom') }}" required autofocus>
			    </div>

			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
        {{-- form --}}

      </div><!-- sl-pagebody -->
    </div>
@endsection



