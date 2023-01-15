@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">Add Product Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Category Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="category_name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Brand Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="brand_name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <label for=""><input type="radio" checked name="status" value="1">Published</label>
                                <label for=""><input type="radio"  name="status" value="0">Unpublished</label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image"/>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-outline-success px-5" value="Create New Product"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
