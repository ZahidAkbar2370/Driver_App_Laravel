@extends('layouts/app')
@section('content')

	
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<h1>{{$driver_detail->name}}</h1>
				<img src="../images/{{$driver_detail->image}}" style="width: 450px;height: 380px;">
			</div>

			<div class="col-md-6">
				<table style="margin-top: 50px;">
					<tr>
						<th>Name</th>
						<td>{{$driver_detail->name}}</td>
					</tr>

					<tr>
						<th>Mobile No</th>
						<td>{{$driver_detail->mobile_no}}</td>
					</tr>

					<tr>
						<th>Whats App</th>
						<td>{{$driver_detail->whatsapp_no}}</td>
					</tr>

					<tr>
						<th>Cnic No</th>
						<td>{{$driver_detail->cnic_no}}</td>
					</tr>

					<tr>
						<th>Date of Birth</th>
						<td>{{$driver_detail->date_of_birth}}</td>
					</tr>

					<tr>
						<th>Domicile</th>
						<td>{{$driver_detail->domicile}}</td>
					</tr>

					<tr>
						<th>Vehicle No</th>
						<td>{{$driver_detail->vehicle_no}}</td>
					</tr>

					<tr>
						<th>Vehicle Type</th>
						<td>{{$driver_detail->vehicle_no}}</td>
					</tr>

					<tr>
						<th>License No</th>
						<td>{{$driver_detail->license_no}}</td>
					</tr>
				</table>
			</div>

		</div>
	</div>


@endsection