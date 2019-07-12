 @extends('apps.adminlayout')
 @section('sectionheader')
 <h1>
   Dashboard |
   <small>Input User</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i>User</a></li>
   <li class="active">Input User</li>
 </ol>
 @endsection
 @section('content')
 <div class="box box-warning">
   <div class="box-header with-border">
     <h3 class="box-title">Input User Form</h3>
   </div>
   <div class="box-body">
     <form role="form">
       <div class="form-group">
         <label>Name</label>
         <input type="text" class="form-control" placeholder="Enter Name">
       </div>

       <div class="form-group">
         <label>Gender</label>
         <select class="form-control">
         <option>Chose Gender</option>
           <option>Male</option>
           <option>Female</option>
         </select>
       </div>

       <div class="form-group">
         <label>Born Place</label>
         <input type="text" class="form-control" placeholder="Enter Born Place">
       </div>

       <div class="form-group">
         <label>Born Date</label>
         <select class="form-control">
           <option>Day</option>
           @for ($i = 1; $i < 32; $i++)<option>{{ $i }}</option>@endfor
         </select>
         <br>
         <select class="form-control">
           <option>Month</option>
           @for ($i = 1; $i < 13; $i++)<option>{{ $i }}</option>@endfor
         </select>
         <br>
         <select class="form-control">
           <option>Year</option>
           @for ($i = 1990; $i < 2026; $i++)<option>{{ $i }}</option>@endfor
         </select>
       </div>

       <div class="form-group">
         <label>Address</label>
         <textarea class="form-control" rows="3" placeholder="Enter Address"></textarea>
       </div>

       <div class="form-group">
         <label>Email</label>
         <input type="text" class="form-control" placeholder="Enter Email">
       </div>

       <div class="form-group">
         <label>Role</label>
         <select class="form-control">
           <option>Chose Role</option>
           <option>User</option>
           <option>Admin</option>
           <option>Head Staff</option>
         </select>
       </div>

     </form>
   </div>
   <!-- /.box-body -->
 </div>
 @endsection