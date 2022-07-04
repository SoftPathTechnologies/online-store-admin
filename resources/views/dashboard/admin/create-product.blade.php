@extends('dashboard.admin.layouts.admin-dash-layout')
@section('title', 'Create New Products')

@section('content')
<div class="container-fluid">
    <div class="page-titles d-flex justify-content-between align-items-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Products</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Create New Product</a></li>
        </ol>
        <a href="{{ route('products') }}" class="btn btn-primary">Product Lists</a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('create-product') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="row shadow p-3 mb-5 bg-white rounded">
                            <div class="form-group col-md-6">
                                <label class="text-black font-w500">Product Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-black font-w500">Description</label>
                                <textarea type="text" name="desc" class="form-control"></textarea>
                            </div>
                            <div class="form-group input-group col-md-12">
                                <div class="custom-file">
                                    <input type="file"  name="product_img" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group ml-auto">
                                <button type="submit" class="btn btn-info">+Add More Products</button>
                            </div>
                        </div>

                        <div class="form-group m-auto">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">+ Save All Products</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
