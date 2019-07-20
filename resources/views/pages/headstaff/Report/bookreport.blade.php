 @extends('apps.headstafflayout')
 @section('sectionheader')
 <h1>
   Dashboard |
   <small>Book Report</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i>Report</a></li>
   <li class="active">Book Report</li>
 </ol>
 @endsection
 @section('content')
 <div class="box">
   <div class="box-header">
     <h3 class="box-title">Book Report</h3>
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
           <div class="table-responsive">
           <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
             <thead>
               <tr role="row">
                 <th>ID Book</th>
                 <th>Book Title</th>
                 <th>Author</th>
                 <th>Publisher</th>
                 <th>Description</th>
               </tr>
             </thead>
             <tbody>
               @foreach($books as $p)
               <tr>
                 <td>{{ $p->id_book }}</td>
                 <td>{{ $p->book_title }}</td>
                 <td>{{ $p->author }}</td>
                 <td>{{ $p->publisher }}</td>
                 <td>{{ $p->description }}</td>
               </tr>
               @endforeach
           </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 @endsection