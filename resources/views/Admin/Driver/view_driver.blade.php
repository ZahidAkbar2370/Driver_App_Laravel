@extends('Admin.admin_layout')
@section('content')

	
<div class="row-fluid sortable"> 

        <div class="box span12">
          <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Customers</h2>
          </div>

          <div class="box-content">

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Mobile No</th>
                  <th>Whats App No</th>
                  <th>Date of Birth</th>
                  <th>CNIC #</th>
                  <th>Domicile</th>
                  <th>Vehicle No</th>
                  <th>Vehicle Type</th>
                  <th>License No</th>
                  <th>Publication Status</th>
                  <!-- <th>Action</th> -->
                </tr>
              </thead>

              <tbody>
              	@if($all_drivers)
              	@foreach($all_drivers as $drivers)
              	<tr>
                  <td>{{$drivers->id}}</td>
              		<td><img src="images/{{$drivers->image}}" style="width: 50px;height: 40px;"></td>
                  <td>{{$drivers->name}}</td>
              		<td>{{$drivers->mobile_no}}</td>
                  <td>{{$drivers->whatsapp_no}}</td>
              		<td>{{$drivers->date_of_birth}}</td>
              		<td>{{$drivers->cnic_no}}</td>
                  <td>{{$drivers->domicile}}</td>
              		<td>{{$drivers->vehicle_no}}</td>
                  <td>{{$drivers->vehicle_type}}</td>
                  <td>{{$drivers->license_no}}</td>
              		<td>Active</td>
              		<!-- <td><a href="#">Active</a></td>
              		<td><a href="#">Edit</a></td>
              		<td><a href="#">Delete</a></td> -->
              	</tr>
                @endforeach
                @endif

              </tbody>
                
              
            </table>            
          </div>
        </div><!--/span-->
      
      </div><!--/row-->


@endsection