@extends('dashboard.admin.layouts.admin-dash-layout')
@section('title', 'Products')

@section('content')
<div class="container-fluid">
    <div class="page-titles d-flex justify-content-between align-items-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Products</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Product Lists</a></li>
        </ol>
        <a href="{{ route('create-product') }}" class="btn btn-primary">+ Create Product</a>
    </div>
    <div class="row">
        @foreach($products as $key => $data)
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="/uploads/{{ $data->image }}" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="{{ url('product-details/'.$data->encrypted_id) }}">{{$data->name}}</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                </ul>
                                <span class="price">$761.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
