 @extends('apps.adminlayout')
 @section('sectionheader')
 <h1>
   Dashboard |
   <small>Change Password</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i>Profile</a></li>
   <li class="active">Change Password</li>
 </ol>
 @endsection
 @section('content')
 <div class="box box-info">
   <div class="box-header with-border">
     <h3 class="box-title">Change Password Form</h3>
   </div>
   <!-- /.box-header -->
   <!-- form start -->
   <form class="form-horizontal">
     <div class="box-body">
       <div class="form-group">
         <label for="inputEmail3" class="col-sm-2 control-label">Current Password</label>

         <div class="col-sm-10">
           <input type="email" class="form-control" id="inputEmail3" placeholder="Current Password">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>

         <div class="col-sm-10">
           <input type="password" class="form-control" id="inputPassword3" placeholder="New Password">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Confirm New Password</label>

         <div class="col-sm-10">
           <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm New Password">
         </div>
       </div>
     </div>
     <!-- /.box-body -->
     <div class="box-footer">
       <button type="submit" class="btn btn-info pull-right">Change</button>
     </div>
     <!-- /.box-footer -->
   </form>
 </div>
 @endsection