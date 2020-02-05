@extends('layouts.admin')
@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <p>Birds Eye Garments</p>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Last 30 Days Total Purchase</h5>
          <a class="btn btn-primary" href="{{ route('allproduct') }}" role="button">All Product</a>
          <a class="btn btn-primary" href="{{ route('addproduct') }}" role="button">Add Product</a>
          

        </div>

        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">SL</th>
				      <th scope="col">Today Total Purchase</th>
				      <th scope="col">Weekly Total Purchase</th>
				      <th scope="col">Monthly Total Purchase</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>{{ $sum }}</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry the Bird</td>
				      <td>Larry the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

      </div><!-- sl-pagebody -->
    </div>
@endsection