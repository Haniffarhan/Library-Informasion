 @extends('apps.userlayout')
 @section('sectionheader')
 <h1>
   Dashboard |
   <small>Borrowing Books</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i>Book</a></li>
   <li class="active">Borrowing Books</li>
 </ol>
 @endsection
 @section('content')
 <div class="box">
   <div class="box-header">
     <h3 class="box-title">Borrowing Books</h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
       <div class="row">
         <div class="col-sm-6"></div>
         <div class="col-sm-6"></div>
       </div>
       <div class="row">
         <div class="col-sm-12">
           <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
             <thead>
               <tr role="row">
                 <th>No</th>
                 <th>Book Name</th>
                 <th>Author</th>
                 <th>Return Date</th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <td>Gecko</td>
                 <td>Firefox 1.0</td>
                 <td>Win 98+ / OSX.2+</td>
                 <td>1.7</td>
               </tr>
           </table>
         </div>
       </div>
     </div>
   </div>
 </div>
 @endsection