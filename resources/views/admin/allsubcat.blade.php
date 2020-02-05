@extends('layouts.admin')
@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <p>Birds Eye Garments</p>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Subcategory Table</h5>
          <a class="btn btn-primary" href="{{ route('addsubcat') }}" role="button">Add Subcategory</a>
        </div>

        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SL</th>
                  <th class="wd-15p">Sucategory Name</th>
                  <th class="wd-20p">Category</th>
                  <th class="wd-20p">Status</th>
                  <th class="wd-20p">Change Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allsubcat as $all)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ $all->subname }}</td>
                  <td>{{ $all->relcat->name }}</td>
                  <td>
                    @if($all->status==0)
                        <p style="color: red;">Inactive</p>
                    @endif
                    @if($all->status==1)
                        <p style="color: blue;">Active</p>
                    @endif
                  </td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Change
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item btn-sm" href="{{ url('change/active/'.$all->id) }}">Active</a>
                        <a class="dropdown-item btn-sm" href="{{ url('change/inactive/'.$all->id) }}">Inactive</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit">
                      <a href="{{ url('edit/subcat/'.$all->id) }}"><i class="fa fa-edit"></i></a>
                    </button>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Delete">
                     <a href="{{ url('delete/subcat/'.$all->id) }}" onclick="return confirm('Do you want to delete?')"><i class="fa fa-trash"></i></a> 
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


