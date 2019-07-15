 @extends('apps.adminlayout')
 @section('sectionheader')
 <h1>
   Dashboard |
   <small>Profile User</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i>Profile</a></li>
   <li class="active">Profile User</li>
 </ol>
 @endsection
 @section('content')
 <div class="box box-info">
   <div class="box-header with-border">
     <h3 class="box-title">Profile User</h3>
   </div>
   <!-- /.box-header -->
   <!-- form start -->
   <form class="form-horizontal">
     @csrf
     <div class="box-body">
       <div class="form-group">
         <label for="inputEmail3" class="col-sm-2 control-label">ID User</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputEmail3" placeholder="ID User"value="{{ $users->id_user }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Nama User</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Nama User" value="{{ $users->name }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Gender" value="{{ $users->gender }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Born Place</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Born Place" value="{{ $users->born_place }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Born Date</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Born Date" value="{{ $users->born_date_year }} / {{ $users->born_date_month }} / {{ $users->born_date_day }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Address</label>

         <div class="col-sm-10">
           <textarea class="form-control" rows="3" placeholder="Address">{{ $users->address }}</textarea>
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Phone Number</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Phone Number" value="{{ $users->phone_number }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Email" value="{{ $users->email }}">
         </div>
       </div>
     </div>
   </form>
 </div>
 @endsection