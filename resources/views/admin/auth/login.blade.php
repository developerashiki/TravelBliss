@extends('admin.auth.authLayout')
@section('authLayout')

<div class="container mt-5">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            <img class="bg-login-image" src="{{asset ('assets/images/password.png')}}">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">

                                    <h1 class="h4 text-web mb-4">Welcome <strong> Mall </strong> </h1>
                                </div>
                                <form action="{{ route('login.confirm') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label for="">Email Address</label>
                                        <input type="email" value="{{ old('email') }}" id="email" class="form-control" name="email" placeholder="Enter a email" />
                                    </div>

                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter password" />
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection