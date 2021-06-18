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
                  <th>Customer Name</th>
                  <th>Mobile No</th>
                  <th>Date of Birth</th>
                  <th>CNIC #</th>
                  <th>Address</th>
                  <th>Publication Status</th>
                  <!-- <th>Action</th> -->
                </tr>
              </thead>

              <tbody>
              	@if($all_customers)
              	@foreach($all_customers as $customers)
              	<tr>
              		<td>{{$customers->customer_name}}</td>
              		<td>{{$customers->mobile_no}}</td>
              		<td>{{$customers->date_of_birth}}</td>
              		<td>{{$customers->cnic_no}}</td>
              		<td>{{$customers->address}}</td>
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