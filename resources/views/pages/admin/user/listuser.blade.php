 @extends('apps.adminlayout')
 @section('sectionheader')
 <h1>
   Dashboard |
   <small>List User</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i>User</a></li>
   <li class="active">List User</li>
 </ol>
 @endsection
 @section('content')
 <div class="box">
   <div class="box-header">
     <h3 class="box-title">List User</h3>
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
                   <th>ID User</th>
                   <th>User Name</th>
                   <th>Gender</th>
                   <th>Born Place</th>
                   <th>Born Date</th>
                   <th>Address</th>
                   <th>Email</th>
                   <th>Phone Number</th>
                   <th>ID Role</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach($users as $p)
                 <tr>
                   <td>{{ $p->id_user }}</td>
                   <td>{{ $p->name }}</td>
                   <td>{{ $p->gender }}</td>
                   <td>{{ $p->born_place }}</td>
                   <td>{{ $p->born_date_year }} / {{ $p->born_date_month }} / {{ $p->born_date_day }}</td>
                   <td>{{ $p->address }}</td>
                   <td>{{ $p->email }}</td>
                   <td>{{ $p->phone_number }}</td>
                   <td>{{ $p->id_role }}</td>
                 </tr>
                 @endforeach
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 @endsection