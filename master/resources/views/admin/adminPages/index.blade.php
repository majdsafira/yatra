@extends('admin.adminLayout.adminMaster')

@section('content')

@php

use App\Models\Admin;
use App\Models\User;
use App\Models\Tours;

 $users = User::all()->count();
 $tours = Tours::all()->count();
 $admin = Admin::all()->count();
//  $cases = Help::all();
//  $cases = DB::table('helps')->orderBy('id','desc')->Paginate(10);
//   $i=0;
@endphp

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                 <h5 class="text-white mb-0">{{$users}} <span class="float-right"></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Users</span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                <h5 class="text-white mb-0">{{$tours}} <span class="float-right"></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Tours </span></p>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">{{$admin}} <span class="float-right"></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Admins </span></p>
                </div>
            </div>
        </div>
    </div>
 </div>



	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Recent Cases
		  <div class="card-action">
             <div class="dropdown">

              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>No.</th>
                     <th>Name</th>
                     <th>phone</th>
                     <th>address</th>
                     <th>status</th>
                     <th>social_security</th>
                   </tr>
                   </thead>
                   <tbody>
                    {{-- @foreach($cases as $case)
                    <tr>
                    <td>{{++$i}}</td>
                    <td>{{$case->name}}</td>
                    <td>{{$case->phone}}</td>
                    <td>{{$case->address}}</td>
                    @if($case->status == 1)
                      <td> Done </td>

                    @else


                      <td> In Progress </td>
                    @endif
                    <td>{{$case->social_security}}</td>
                   </tr>
                   @endforeach --}}

                 </tbody></table>
               </div>

              </div>
              <div class="pagination-wrapper ml-3">
               {{-- {{ $cases->links('pagination::bootstrap-4')}} --}}
             </div>
            </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->

    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>

@endsection
