<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL:: asset('css/sign.css') }}">

    <title>Husky</title></head>
<body>
<section class="vh-80">
    <div class="container py-4 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-8 col-xl-4">
                <div class="card shadow-4-strong" style="border-radius: 2rem;">
                    <div class="card-body p-5">

                        <div class="text-center">
                            <h3 class="mb-3">Sign in</h3>
                        </div>
{{--pull-right--}}
                 {{--       <div class="form-outline mb-4">
                            <label class="form-label" for="typeEmailX-2">Email Address</label>
                            <input type="email" id="typeEmailX-2" class="itype form-control form-control-lg"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="typePasswordX-2">Password</label>
                            <input type="password" id="typePasswordX-2" class="itype form-control form-control-lg"/>
                        </div>--}}

                        <!-- Checkbox -->
                        {{--    <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3"/>
                                <label class="form-check-label" for="form1Example3"> Remember password </label>
                            </div>--}}

                        {{--                        <button class="btn btn-primary btn-lg btn-block " type="submit">Login</button>--}}

                        {{--                        <hr class="my-4">--}}

                        {{--                        <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"--}}
                        {{--                                type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>--}}
                        {{--                        <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"--}}
                        {{--                                type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>--}}
{{--        form-control form-control-lg                btn btn-lg btn-block--}}
                        <div class="content">
                            <a href="forget" class="link">Forget Password</a>
                        </div>


                        <button class="button5 form-control form-control-lg ">Sign In</button>


                    </div>

                </div>


            </div>
        </div>
    </div>
</section>
</body>
