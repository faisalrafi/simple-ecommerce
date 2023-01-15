@extends('website.master')

@section('title')
    Contact
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center border-5">
                        <h3 class="">Contact Us</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="float-end"><i class="fa-solid fa-phone fa-2x"></i></span>
                            </div>
                            <div class="col-md-9 float-start">
                                <h5 class="">+8801942737870, +091832817</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="float-end"><i class="fa-solid fa-envelope fa-2x"></i></span>
                            </div>
                            <div class="col-md-9 float-start">
                                <h5 class="">bitm@org.bd</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="float-end"><i class="fa-solid fa-house-chimney fa-2x"></i></span>
                            </div>
                            <div class="col-md-9 float-start">
                                <h5 class="">3rd Floor, BDBL Bhaban, East 12, Kawran Bazar, Dhaka-1215</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center my-message fw-bold">Send Your Message</div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Your Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Your Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Your Message</label>
                                    <div class="col-md-9">
                                        <textarea name="message" id="" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success w-50" value="SEND"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Location</h1>
                <hr/>
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58419.389094843275!2d90.35581659775643!3d23.775470401583167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbitm%20dhaka%20location!5e0!3m2!1sen!2sbd!4v1670938393091!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


@endsection
