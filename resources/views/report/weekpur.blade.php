@extends('layouts.admin')
@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <p>Birds Eye Garments</p>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Last Week Purchase Table</h5>
          <a class="btn btn-primary" href="{{ route('allproduct') }}" role="button">All Product</a>
          <a class="btn btn-primary" href="{{ route('addproduct') }}" role="button">Add Product</a>
        </div>

        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SL</th>
                  <th class="wd-15p">Date</th>
                  <th class="wd-20p">Code</th>
                  <th class="wd-20p">Sample</th>
                  <th class="wd-20p">Cate</th>
                  <th class="wd-20p">Yard</th>
                  <th class="wd-20p">Amount</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allpro as $all)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ date('d-M-y',strtotime($all->purdate)) }}</td>
                  <td>{{ $all->pcode }}</td>
                  <td><img height="50" width="50" src="{{ asset('uploads/'.$all->pimg) }}" alt=""></td>
                  <td>{{ $all->subcat->subname }}</td>
                  <td>{{ $all->yard }}</td>
                  <td>{{ $all->amount }}</td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

      </div><!-- sl-pagebody -->
    </div>
@endsection


