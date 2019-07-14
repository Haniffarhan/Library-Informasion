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
     <form role="form" method="post" action="{{ route('admin.inputborrow') }}">
       @csrf
       <div class="form-group">
         <label>ID User</label>
         <div class="input-group input-group-sm">
           <input type="text" class="form-control" name="id_user">
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
           <input type="text" class="form-control" name="id_book">
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
         <select class="form-control" name="borrow_date_day">
           @for ($borrow_day = 1; $borrow_day < 32; $borrow_day++)<option value="{{ $borrow_day }}">{{ $borrow_day }}</option>@endfor
         </select>
         <br>
         <select class="form-control" name="borrow_date_month">
           @for ($borrow_month = 1; $borrow_month < 13; $borrow_month++)<option value="{{ $borrow_month }}">{{ $borrow_month }}</option>@endfor
         </select>
         <br>
         <select class="form-control" name="borrow_date_year">
           @for ($borrow_year = 2010; $borrow_year < 2026; $borrow_year++)<option value="{{ $borrow_year }}">{{ $borrow_year }}</option>@endfor
         </select>
       </div>

       <div class="form-group">
         <label>Return Date</label>
         <select class="form-control" name="return_date_day">
           @for ($return_day = 1; $return_day < 32; $return_day++)<option value="{{ $return_day }}">{{ $return_day }}</option>@endfor
         </select>
         <br>
         <select class="form-control" name="return_date_month">
           @for ($return_month = 1; $return_month < 13; $return_month++)<option value="{{ $return_month }}">{{ $return_month }}</option>@endfor
         </select>
         <br>
         <select class="form-control" name="return_date_year">
           @for ($return_year = 2010; $return_year < 2026; $return_year++)<option value="{{ $return_year }}">{{ $return_year }}</option>@endfor
         </select>
       </div>
       <button type="submit" class="btn btn-primary">SAVE</button>
     </form>
   </div>
   <!-- /.box-body -->
 </div>
 @endsection