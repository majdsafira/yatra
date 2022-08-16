@extends('admin.adminLayout.adminMaster')

@section('content')



<!--End topbar header-->
<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Edit tours</div>
           <hr>
           <form action="{{route('tours.store')}}" method="POST">
            @csrf


            <div class="form-group">
                <label for="input-1">Name</label>
                <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name" name="name"  >
               </div>
               <div class="form-group">
                   <label for="input-2">Description</label>
                   <input type="text" class="form-control" name="description" id="input-2" placeholder="Enter Your Email Address"  >
                </div>
                <div class="form-group">
                    <label for="input-4">Departure</label>
                    <input type="phone" class="form-control" name="departure" id="input-4" >
                </div>
                <div class="form-group">
                 <label for="input-1">Departure Time</label>
                 <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="departure_time" >
                </div>
                <div class="form-group">
                 <label for="input-1">Maximum Travellers</label>
                 <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="maximum_travellers"  >
                </div>
                <div class="form-group">
                 <label for="input-1">languages</label>
                 <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="languages"   >
                </div>
                <div class="form-group">
                 <label for="input-1">Popular Places</label>
                 <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="departure_time">
                </div>
                <div class="form-group">
                 <label for="input-1">Price</label>
                 <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="popular_places" >
                </div>


         <div class="form-group">
          <input type="submit" class="btn btn-light px-5 icon-lock" value="Add">
        </div>
        </form>
         </div>
         </div>
      </div>





@endsection
