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
         <label>Author</label>
         <input type="text" class="form-control" placeholder="Enter Author">
       </div>

       <div class="form-group">
         <label>Publisher</label>
         <input type="text" class="form-control" placeholder="Enter Publisher">
       </div>

       <div class="form-group">
         <label>Description</label>
         <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
       </div>
     </form>
   </div>
   <!-- /.box-body -->
 </div>
 @endsection