@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><h1>{{ __('Driver Profile') }}</h1></center></div>
                <br>

                <div class="card-body">
                	@if(!empty($driver))
					@foreach($driver as $values)
                    <form method="POST" action="{{URL::to('save-driver-profile') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="driver_name" class="col-md-4 col-form-label text-md-right">Driver Name</label>

                            <div class="col-md-6">
                                <input id="driver_name" type="text" class="form-control" name="driver_name" value="{{$values->name}}" autocomplete="driver_name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">Mobile No</label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="number" class="form-control" name="mobile_no" value="{{$values->mobile_no}}" autocomplete="mobile_no" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="whatsapp_no" class="col-md-4 col-form-label text-md-right">Whatapp No</label>

                            <div class="col-md-6">
                                <input id="whatsapp_no" type="number" class="form-control" name="whatsapp_no" value="{{$values->whatsapp_no}}" autocomplete="whatsapp_no" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cnic_no" class="col-md-4 col-form-label text-md-right">CNIC No</label>

                            <div class="col-md-6">
                                <input id="cnic_no" type="number" class="form-control" name="cnic_no" value="{{$values->cnic_no}}" autocomplete="cnic_no" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Birth Date</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{$values->date_of_birth}}" autocomplete="date_of_birth" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="domicile" class="col-md-4 col-form-label text-md-right">Domicile</label>

                            <div class="col-md-6">
                                <input id="domicile" type="text" class="form-control" name="domicile" value="{{$values->domicile}}" autocomplete="domicile" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vehicle_no" class="col-md-4 col-form-label text-md-right">Vehicle No</label>

                            <div class="col-md-6">
                                <input id="vehicle_no" type="text" class="form-control" name="vehicle_no" value="{{$values->vehicle_no}}" autocomplete="vehicle_no" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vehicle_type" class="col-md-4 col-form-label text-md-right">Vehicle Type</label>

                            <div class="col-md-6">
                                <input id="vehicle_type" type="text" class="form-control" name="vehicle_type" value="{{$values->vehicle_type}}" autocomplete="vehicle_type" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="license_no" class="col-md-4 col-form-label text-md-right">License No</label>

                            <div class="col-md-6">
                                <input id="license_no" type="text" class="form-control" name="license_no" value="{{$values->license_no}}" autocomplete="license_no" autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image" value="{{$values->image}}" autocomplete="image" autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="roles" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" s>
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
