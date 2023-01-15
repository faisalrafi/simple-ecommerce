@extends('website.master')

@section('body')


    <div class="row py-5 bg-gradient-primary">
        <div class="container py-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Product Detail</h4>

                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tr>
                                <th>Product Id</th>
                                <td>{{$product->id}}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{$product->name}}</td>
                            </tr>
                            <tr>
                                <th>Category Name</th>
                                <td>{{$product->category_name}}</td>
                            </tr>
                            <tr>
                                <th>Brand Name</th>
                                <td>{{$product->brand_name}}</td>
                            </tr>
                            <tr>
                                <th>Product Description</th>
                                <td>{{$product->description}}</td>
                            </tr>
                            <tr>
                                <th>Product Image</th>
                                <td><img src="{{asset($product->image)}}" alt="" height="160" width="190"/></td>
                            </tr>
                            <tr>
                                <th>Product Publication Status</th>
                                <td>{{$product->status == 1 ? 'Product Published' : 'Product Not Published'}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->

        </div>
    </div>



@endsection
