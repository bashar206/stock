@extends('layouts.admin')
@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Purchase</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                @php
                  $date = now()->startOfDay();
                  $d1=App\Product::where('purdate','>=',$date)->sum('amount');
                  $d2=App\Product::where('purdate','>=',$date)->sum('sroom');
                  $d3=App\Product::where('purdate','>=',$date)->sum('waste');
                @endphp
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳ {{ $d1 }}</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Show Room Entry</span>
                  <h6 class="tx-white mg-b-0">{{ $d2 }} pcs</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Wastage</span>
                  <h6 class="tx-white mg-b-0">{{ $d3 }} pcs</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Last 7 Day's Purchase</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                @php
                  $date = now()->subDays(7)->startOfDay();
                  $sum1=App\Product::where('purdate','>=',$date)->sum('amount');
                  $sum2=App\Product::where('purdate','>=',$date)->sum('sroom');
                  $sum3=App\Product::where('purdate','>=',$date)->sum('waste');
                @endphp
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳ {{ $sum1 }}</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Show Room Entry</span>
                  <h6 class="tx-white mg-b-0">{{ $sum2 }} pcs</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Wastage</span>
                  <h6 class="tx-white mg-b-0">{{ $sum3 }} pcs</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Last 30 Day's Purchase</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                @php
                  $date = now()->subDays(30)->startOfDay();
                  $s1=App\Product::where('purdate','>=',$date)->sum('amount');
                  $s2=App\Product::where('purdate','>=',$date)->sum('sroom');
                  $s3=App\Product::where('purdate','>=',$date)->sum('waste');
                @endphp
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳ {{ $s1 }}</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Show Room Entry</span>
                  <h6 class="tx-white mg-b-0">৳ {{ $s2 }}</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Wastage</span>
                  <h6 class="tx-white mg-b-0">৳ {{ $s3 }}</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Last 365 Day's Purchase</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                @php
                  $date = now()->subDays(365)->startOfDay();
                  $y1=App\Product::where('purdate','>=',$date)->sum('amount');
                  $y2=App\Product::where('purdate','>=',$date)->sum('sroom');
                  $y3=App\Product::where('purdate','>=',$date)->sum('waste');
                @endphp
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳ {{ $y1 }}</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Show Room Entry</span>
                  <h6 class="tx-white mg-b-0">৳ {{ $y2 }}</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Wastage</span>
                  <h6 class="tx-white mg-b-0">৳ {{ $y3 }}</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->

          

          


        </div><!-- row -->

        

      </div><!-- sl-pagebody -->

      <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Purchase & Product Table</h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SL</th>
                  <th class="wd-15p">Purchase Date</th>
                  <th class="wd-20p">Code</th>
                  <th class="wd-15p">Product Type</th>
                  <th class="wd-10p">Yard</th>
                  <th class="wd-25p">Amount (BDT)</th>
                  <th class="wd-25p">Total</th>
                  <th class="wd-25p">Finished Product</th>
                  <th class="wd-25p">Cartoon</th>
                  <th class="wd-25p">Show Room</th>
                  <th class="wd-25p">Wastage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allpro as $all)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ date('d-M-y',strtotime($all->purdate)) }}</td>
                  <td>{{ $all->pcode }}</td>
                  <td>{{ $all->subcat->subname }}</td>
                  <td>{{ $all->yard }}</td>
                  <td>{{ $all->amount }}</td>
                  <td>{{ $all->total }}</td>
                  <td>{{ $all->famount }}</td>
                  <td>{{ $all->cartoon }}</td>
                  <td>{{ $all->sroom }}</td>
                  <td>{{ $all->waste }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div>
@endsection
