@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Recover_Password') 2
@endsection

@section('css')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #121212;
        color: #e0e0e0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .reset-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .reset-box {
        background-color: #1e1e1e;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.7);
    width: 350px;
    text-align: center;
    }

    .reset-header h2 {
        margin: 0;
    font-size: 24px;
    color: #264e86;
    }

    .reset-header p {
        font-size: 14px;
    color: #a0a0a0;
    margin-bottom: 20px;
    }

    .input-group {
    margin-bottom: 15px;
    text-align: left;
    padding-right: 0; /* Remove padding that could affect width */
}

.input-group input {
    width: calc(100% ); /* Adjust width considering padding */
    padding: 10px;
    border: 1px solid #333;
    border-radius: 5px;
    background-color: #2a2a2a;
    color: #e0e0e0;
}


    .input-group label {
    display: block;
    font-size: 12px;
    margin-bottom: 5px;
    color: #a0a0a0;
    }

    .input-group input::placeholder {
        color: #6c6c6c;
    }

    .reset-btn {
        width: 100%;
    padding: 10px;
    background-color: #264e86;
    color: #121212;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    }

    .reset-btn:hover {
        background-color: #264e8675;
    }

    .reset-container {
        background-color: #121212 !important;
    }

    .reset-box {
        box-shadow: 0 0 15px rgba(0, 0, 0, 1); /* More intense shadow */
    }

    .login-link {
        margin-top: 20px;
    }

    .login-link p {
        font-size: 14px;
    color: #a0a0a0;
    }

    .login-link a {
        color: #264e86;
        text-decoration: none;
    }

    .login-link a:hover {
    text-decoration: underline;
}


</style>
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')

                    <div class="reset-container">
                        <div class="reset-box">
                            <div class="reset-header">
                                    <div class="reset-header">
                                            <h2> Reset Password</h2>
                                            <p>Please enter your email to receive the reset link</p>
                                    </div>
                                            @if (session('status'))
                                                <div class="alert alert-success text-center mb-4" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <form class="form-horizontal" method="POST"
                                                action="{{ route('password.update') }}">
                                                @csrf
                                                <input type="hidden" name="token" value="{{ $token }}">
                                                <div class="input-group">
                                                    <label for="useremail" >Email</label>
                                                    <input type="email"
                                                        class="@error('email') is-invalid @enderror"
                                                        id="useremail" name="email" placeholder="Enter email"
                                                        value="{{ $email ?? old('email') }}" id="email">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="userpassword" placeholder="Enter password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="userpassword">Confirm Password</label>
                                                    <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Enter confirm password">
                                                </div>

                                                <div class="text-end">
                                                    <button class="reset-btn"
                                                        type="submit">Reset</button>
                                                </div>

                                            </form>
                                            <div class="login-link">
                                                <p>Remember It ? <a href="{{ url('login') }}" style="text-decoration:underline">Sign In here</a> </p>
                                            </div>
                                          <p>©
                                            <script>
                                              document.write(new Date().getFullYear())
                                            </script> <p> All Rights Reserved.</p>
                                          </p>
                            </div>
                        </div>
                    </div>

    @endsection

    @section('script')
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/assets/js/auth-2-carousel.init.js') }}"></script>
    @endsection
