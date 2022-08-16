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
            <form action="{{route('tours.update',$tours->id)}}" method="POST">
              @csrf
              @method('PUT')

           <div class="form-group">
            <label for="input-1">Name</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name" name="name" value="{{$tours->name}}">
           </div>
           <div class="form-group">
               <label for="input-2">Description</label>
               <input type="text" class="form-control" name="description" id="input-2" placeholder="Enter Your Email Address" value={{$tours->description}}>
            </div>
            <div class="form-group">
                <label for="input-4">Departure</label>
                <input type="phone" class="form-control" name="departure" id="input-4" value= {{$tours->departure}}>
            </div>
            <div class="form-group">
             <label for="input-1">Departure Time</label>
             <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="departure_time" value= {{$tours->departure_time}}>
            </div>
            <div class="form-group">
             <label for="input-1">Maximum Travellers</label>
             <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="maximum_travellers" value= {{$tours->maximum_travellers}}>
            </div>
            <div class="form-group">
             <label for="input-1">languages</label>
             <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="price" value= {{$tours->price}}>
            </div>
            <div class="form-group">
             <label for="input-1">Popular Places</label>
             <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="departure_time" value= {{$tours->departure_time}}>
            </div>
            <div class="form-group">
             <label for="input-1">Price</label>
             <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="popular_places" value= {{$tours->popular_places}}>
            </div>

           <div class="form-group">
            <input type="submit" class="btn btn-light px-5 " value="UPDATE">
          </div>
          </form>
         </div>
         </div>
      </div>





@endsection
