@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add Product information</h4>
                    <p class="card-title-desc text-success text-center fw-bold">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td><img src="{{ asset( $product->image) }}" alt="" height="80" width="100"></td>
                                <td>{{ $product->status== 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{route('product.detail', ['id'=>$product->id])}}" class="btn btn-info btn-sm mb-1">Detail</a>
                                    <a href="{{route('product.update-status', ['id'=>$product->id])}}" class="btn btn-primary btn-sm mb-1">Published</a>
                                    <a href="{{route('product.edit', ['id'=>$product->id])}}" class="btn btn-success btn-sm mb-1">Edit</a>
                                    <a href="{{route('product.delete', ['id'=>$product->id])}}" class="btn btn-danger btn-sm mb-1">Delete</a>
                                </td>
                            </tr>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
