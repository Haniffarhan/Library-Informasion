 @extends('apps.adminlayout')
 @section('sectionheader')
 <h1>
   Dashboard |
   <small>Edit User</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i>User</a></li>
   <li class="active">Edit User</li>
 </ol>
 @endsection
 @section('content')
 <div class="box box-warning">
   <div class="box-header with-border">
     <h3 class="box-title">Edit User Form</h3>
   </div>
   <div class="box-body">
     <form role="form" method="post" action="/admin/update-user/{{$users->id_user}}">
       {{ csrf_field() }}
       {{ method_field('PUT') }}
       <div class="form-group">
         <label>Name</label>
         <input type="text" class="form-control" name="name" value="{{ $users->name }}">
       </div>

       <div class="form-group">
         <label>Gender</label>
         <select class="form-control" name="gender">
           <option value="Male">Male</option>
           <option value="Female">Female</option>
         </select>
       </div>

       <div class="form-group">
         <label>Born Place</label>
         <input type="text" class="form-control" name="born_place" value="{{ $users->born_place }}">
       </div>

       <div class="form-group">
         <label>Born Date</label>
         <select class="form-control" name="born_date_day">
           <option>Day</option>
           @for ($day = 1; $day < 32; $day++)<option value="{{ $day }}">{{ $day }}</option>@endfor
         </select>
         <br>
         <select class="form-control" name="born_date_month">
           <option>Month</option>
           @for ($month = 1; $month < 13; $month++)<option value="{{ $month }}">{{ $month }}</option>@endfor
         </select>
         <br>
         <select class="form-control" name="born_date_year">
           <option>Year</option>
           @for ($year = 1990; $year < 2026; $year++)<option value="{{ $year }}">{{ $year }}</option>@endfor
         </select>
       </div>

       <div class="form-group">
         <label>Address</label>
         <textarea class="form-control" rows="3" name="address">{{ $users->address }}</textarea>
       </div>

       <div class="form-group">
         <label>Email</label>
         <input type="text" class="form-control" name="email" value="{{ $users->email }}">
       </div>

       <div class="form-group">
         <label>Phone Number</label>
         <input type="text" class="form-control" name="phone_number" value="{{ $users->phone_number }}">
       </div>

       <div class="form-group">
         <label>Role</label>
         <select class="form-control" name="id_role">
           <option value="3">User</option>
           <option value="1">Admin</option>
           <option value="2">Head Staff</option>
         </select>
       </div>

       <div class="form-group">
         <button type="submit" class="btn btn-primary">SAVE</button>
       </div>

     </form>
   </div>
   <!-- /.box-body -->
 </div>
 @endsection