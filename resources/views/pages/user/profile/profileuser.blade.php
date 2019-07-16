@extends('apps.userlayout')
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
           <input type="text" class="form-control" id="inputEmail3" placeholder="ID User" value="{{ $id_user->id_user }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Nama User</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Nama User" value="{{ $id_user->name }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Gender" value="{{ $id_user->gender }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Born Place</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Born Place" value="{{ $id_user->born_place }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Born Date</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Born Date" value="{{ $id_user->born_date_year }} / {{ $id_user->born_date_month }} / {{ $id_user->born_date_day }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Address</label>

         <div class="col-sm-10">
           <textarea class="form-control" rows="3" placeholder="Address">{{ $id_user->address }}</textarea>
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Phone Number</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Phone Number" value="{{ $id_user->phone_number }}">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputPassword3" placeholder="Email" value="{{ $id_user->email }}">
         </div>
       </div>
     </div>
   </form>
 </div>
 @endsection