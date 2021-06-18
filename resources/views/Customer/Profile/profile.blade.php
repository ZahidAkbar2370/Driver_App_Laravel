@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><h1>{{ __('Customer Profile') }}</h1></center></div>
                <br>

                <div class="card-body">
                    @if(!empty($customer))
                    @foreach($customer as $values)
                    <form method="POST" action="{{URL::to('save-customer-profile') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="customer_name" class="col-md-4 col-form-label text-md-right">Customer Name</label>

                            <div class="col-md-6">
                                <input id="customer_name" type="text" class="form-control" name="customer_name" placeholder="Customer Name" value="{{$values->customer_name}}" autocomplete="customer_name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">Mobile No</label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="number" class="form-control" name="mobile_no" placeholder="Mobile No" value="{{$values->mobile_no}}" autocomplete="mobile_no" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cnic_no" class="col-md-4 col-form-label text-md-right">CNIC No</label>

                            <div class="col-md-6">
                                <input id="cnic_no" type="number" class="form-control" name="cnic_no" placeholder="CNIC No" value="{{$values->cnic_no}}" autocomplete="cnic_no" autofocus>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Birth Date</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{$values->date_of_birth}}" autocomplete="date_of_birth" autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="number" class="form-control" name="address" placeholder="Address" value="{{$values->address}}" autocomplete="address" autofocus>
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
