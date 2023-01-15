@extends('website.master')
@section('title')
    Product Detail
@endsection

@section('body')

    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body shadow h-100">
                        <img src="{{asset('/')}}website/img/product-1.jpg" alt="" height="400" width="400"/>
                    </div>
                </div>
                <div class="col-md-6 shadow bg-light">
                    <h3 class="text-center">Product Details</h3>
                    <hr/>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h5 class="text-center">Course Name: </h5>
                        </div>
                        <div class="col-md-6">
                            <p class="fw-bold text-black-50">PHP With Laravel Framework</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h5 class="text-center">Teacher Name: </h5>
                        </div>
                        <div class="col-md-6">
                            <p class="fw-bold text-black-50">Faisal Abid</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h5 class="text-center">Starting Date: </h5>
                        </div>
                        <div class="col-md-6">
                            <p class="fw-bold text-black-50">01 January, 2023</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h5 class="text-center">Course Fee: </h5>
                        </div>
                        <div class="col-md-6">
                            <p class="fw-bold text-black-50">25000 Tk.</p>
                        </div>
                    </div>
                    <hr/>
                    <div class="row mt-3">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-info w-75" value="Enroll Now"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="card shadow-lg">
                    <div class="card-header display-6 text-center"><h1>Course Description</h1></div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium blanditiis consectetur consequatur ducimus eligendi error esse ex impedit, incidunt molestiae mollitia nulla numquam perferendis perspiciatis quam sit, vel velit voluptates!</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
