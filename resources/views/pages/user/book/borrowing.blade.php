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
                 <th>ID Borrow</th>
                 <th>ID Book</th>
                 <th>ID User</th>
                 <th>Borrow Date</th>
               </tr>
             </thead>
             <tbody>
               @foreach($borrows as $p)
               <tr>
                 <td>{{ $p->id_borrow }}</td>
                 <td>{{ $p->id_book }}</td>
                 <td>{{ $p->id_user }}</td>
                 <td>{{ $p->borrow_date_year }} / {{ $p->borrow_date_month }} / {{ $p->borrow_date_day }}</td>
               </tr>
               @endforeach
           </table>
         </div>
       </div>
     </div>
   </div>
 </div>
 @endsection