@extends('Admin.admin_layout')
@section('content')

	<h1>Welcome To Admin Dashboard</h1>
<br><br>
	<div class="container-fluid">
		<div class="row-fluid">
			<div style="border: 1px solid;padding: 10px;width: 170px;">
					<h1 class="text-center"><b>Customers</b></h1>
					<p class="text-center">{{$total_customers}}</p>
			</div>
<br><br>
			<div style="border: 1px solid;padding: 10px;width: 170px;">
				<h1 class="text-center"><b>Drivers</b></h1>
				<p class="text-center">{{$total_drivers}}</p>
			</div>

		</div>
	</div>

@endsection