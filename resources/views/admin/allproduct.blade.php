@extends('layouts.admin')
@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <p>Birds Eye Garments</p>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Product Table</h5>
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
                  <th class="wd-20p">15.5</th>
                  <th class="wd-20p">16</th>
                  <th class="wd-20p">16.5</th>
                  <th class="wd-20p">Total</th>
                  <th class="wd-20p">SW</th>
                  <th class="wd-20p">SW Date</th>
                  <th class="wd-20p">Kolor</th>
                  <th class="wd-20p">F.A</th>
                  <th class="wd-20p">F.D</th>
                  <th class="wd-20p">F.P</th>
                  <th class="wd-20p">Ctn</th>
                  <th class="wd-20p">S.R</th>
                  <th class="wd-20p">Waste</th>
                  <th class="wd-20p">Action</th>
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
                  <td>{{ $all->ks }}</td>
                  <td>{{ $all->kss }}</td>
                  <td>{{ $all->ksss }}</td>
                  <td>{{ $all->total }}</td>
                  <td>{{ $all->staff->sname }}</td>
                  <td>{{ date('d-M-y',strtotime($all->swdate)) }}</td>
                  <td>{{ $all->skolor }}</td>
                  <td>{{ $all->famount }}</td>
                  <td>{{ date('d-M-y',strtotime($all->fdate)) }}</td>
                  <td><img height="50" width="50" src="{{ asset('uploads/'.$all->fpimg) }}" alt=""></td>
                  <td>{{ $all->cartoon }}</td>
                  <td>{{ $all->sroom }}</td>
                  <td>{{ $all->waste }}</td>
                  <td>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Delete">
                     <a href="{{ url('delete/staff/'.$all->id) }}" onclick="return confirm('Do you want to delete?')"><i class="fa fa-trash"></i></a> 
                    </button>
                  </td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

      </div><!-- sl-pagebody -->
    </div>
@endsection


