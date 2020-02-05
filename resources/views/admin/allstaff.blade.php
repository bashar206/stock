@extends('layouts.admin')
@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <p>Birds Eye Garments</p>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Staff Table</h5>
          <a class="btn btn-primary" href="{{ route('addstaff') }}" role="button">Add Staff</a>
        </div>

        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SL</th>
                  <th class="wd-15p">Staff Name</th>
                  <th class="wd-20p">Staff Designation</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allstaff as $all)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ $all->sname }}</td>
                  <td>{{ $all->sdesig }}</td>
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


