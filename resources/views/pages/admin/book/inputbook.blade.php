 @extends('apps.adminlayout')
 @section('sectionheader')
 <h1>
   Dashboard |
   <small>Input Book</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i>Book</a></li>
   <li class="active">Input Book</li>
 </ol>
 @endsection
 @section('content')
 <div class="box box-warning">
   <div class="box-header with-border">
     <h3 class="box-title">Input Book Form</h3>
   </div>
   <div class="box-body">
     <form role="form" method="post" action="{{ route('admin.inputbook') }}">
       @csrf
       <div class="form-group">
         <label>Title</label>
         <input type="text" class="form-control" name="book_title">
       </div>

       <div class="form-group">
         <label>Author</label>
         <input type="text" class="form-control" name="author">
       </div>

       <div class="form-group">
         <label>Publisher</label>
         <input type="text" class="form-control" name="publisher">
       </div>

       <div class="form-group">
         <label>Description</label>
         <textarea class="form-control" rows="3" name="description"></textarea>
       </div>

       <button type="submit" class="btn btn-primary">SAVE</button>
     </form>
   </div>
   <!-- /.box-body -->
 </div>
 @endsection