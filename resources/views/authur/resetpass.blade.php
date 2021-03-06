@extends('authur.main')
@section('title', 'Reset password')
@section('content')
<div class="account-pages pt-5 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="account-card-box">
                            <div class="card mb-0">
                                <div class="card-body p-4">
                                    
                                    <div class="text-center">
                                        <div class="my-3">
                                            <a href="index.html">
                                                <span><img src="{{url('admin')}}/images/logogym.gif" alt="" height="50px"></span>
                                            </a>
                                        </div>
                                        <div class="py-3">
                                            <h5 class="text-muted text-uppercase font-16">Reset Password</h5>
                                            <p class="text-muted">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                                        </div>
                                    </div>
    
                                    <form action="#" class="mt-2">
    
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="email" required="" placeholder="Enter your email">
                                        </div>
    
                                        <div class="form-group text-center mb-0">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Send Email </button>
                                        </div>
    
                                    </form>
    
                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Return to <a href="{{route('login')}}" class="text-white ml-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
@endsection()