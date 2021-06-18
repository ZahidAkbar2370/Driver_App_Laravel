@extends('layouts/app')
@section('content')

<div class="container">
         <div class="col-md-9 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">Drivers</h2>
                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @if(!empty($all_drivers))
                                        @foreach($all_drivers as $key=> $drivers)
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/{{$drivers->image}}" width="250px" height="190px" alt="" />
                                                            <h4 style="color: #FE980F">{{$drivers->name}}</h4>
                                                            @if(!empty(Auth::user()))
                                                            <a href="view-driver-deatail/{{$drivers->user_id}}"><button class="btn btn-primary" style="margin-bottom: 10px">Contact</button></a>
                                                            @else
                                                                 <a href="{{url('login')}}"><button class="btn btn-primary" style="margin-bottom: 10px">Contact</button></a>
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>


@endsection