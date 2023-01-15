@extends('admin.master')
@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card border-dark shadow">
                        <div class="card-header display-6 font-monospace text-center bg-light">Edit Product Form</div>
                        <div class="card-body">
                            <p class="text-success text-center fw-bold shadow">{{Session::get('message')}}</p>
                            <form action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input value="{{$product->name}}" type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input value="{{$product->category_name}}" type="text" class="form-control" name="category_name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input value="{{$product->brand_name}}" type="text" class="form-control" name="brand_name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description">{{$product->description}}</textarea>
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
                                        <img src="{{asset($product->image)}}" alt="" height="130" width="160">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Update New Product"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
