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
         <label>ID User</label>
         <div class="input-group input-group-sm">
           <input type="text" class="form-control">
           <span class="input-group-btn">
             <button type="button" class="btn btn-info btn-flat">Go!</button>
           </span>
         </div>
       </div>

       <div class="form-group">
         <label>User Name</label>
         <input type="text" class="form-control" placeholder="Enter Name">
       </div>

       <div class="form-group">
         <label>ID Book</label>
         <div class="input-group input-group-sm">
           <input type="text" class="form-control">
           <span class="input-group-btn">
             <button type="button" class="btn btn-info btn-flat">Go!</button>
           </span>
         </div>
       </div>

       <div class="form-group">
         <label>Book Name</label>
         <input type="text" class="form-control" placeholder="Enter Name">
       </div>

       <div class="form-group">
         <label>Author</label>
         <input type="text" class="form-control" placeholder="Enter Name">
       </div>

       <div class="form-group">
         <label>Borrow Date</label>
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
         <label>Return Date</label>
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
     </form>
   </div>
   <!-- /.box-body -->
 </div>
 @endsection