@extends('layouts.auth')

@section('content')

<div id="page-container" class="main-content-boxed">

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="bg-body-dark bg-pattern"
            style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
            <div class="row mx-0 justify-content-center">
                <div class="hero-static col-lg-6 col-xl-4">
                    <div class="content content-full overflow-hidden">
                        <!-- Header -->
                        <div class="py-30 text-center">

                            <h1 class="h4 font-w700 mt-30 mb-10">Create New Account</h1>
                            <h2 class="h5 font-w400 text-muted mb-0">We’re excited to have you on board!</h2>
                        </div>
                        <!-- END Header -->

                        <!-- Sign Up Form -->
                        <!-- jQuery Validation functionality is initialized with .js-validation-signup class in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-signup" action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="block block-themed block-rounded block-shadow">
                                <div class="block-header bg-primary">
                                    <h3 class="block-title">Please add your details</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="signup-username">Username</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}" required
                                                autocomplete="name" autofocus placeholder="Enter a username..">
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="signup-email">Email</label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Your valid email..">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="signup-password">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password"
                                                placeholder="Choose a safe one..">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="signup-password-confirm">Password Confirmation</label>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                required autocomplete="new-password" placeholder="..and confirm it!">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <?php $roles = App\Role::all(); ?>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <select class="form-control" name="agent_role" style="width: 100%;"
                                                autocomplete="off">
                                                <option selected="selected">Select Role</option>
                                                @foreach ($roles as $row)
                                                    <option>{{$row->agent_role}}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-sm-6 push">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signup-terms"
                                                    name="signup-terms">
                                                <label class="custom-control-label" for="signup-terms">I agree to Terms
                                                    &amp; Conditions</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-right push">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-plus mr-10"></i> Create Account
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content bg-body-light">
                                    <div class="form-group text-center">
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#"
                                            data-toggle="modal" data-target="#modal-terms">
                                            <i class="fa fa-book text-muted mr-5"></i> Read Terms
                                        </a>
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block"
                                            href="op_auth_signin3.html">
                                            <i class="fa fa-user text-muted mr-5"></i> Sign In
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END Sign Up Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!-- Terms Modal -->
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna
                        accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie
                        vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum
                        venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque
                        nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus
                        massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate
                        nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna
                        accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie
                        vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum
                        venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque
                        nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus
                        massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate
                        nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna
                        accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie
                        vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum
                        venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque
                        nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus
                        massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate
                        nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->



@endsection
