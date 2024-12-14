
@section('title')
  @lang('translation.Register')
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
a
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
    
    
}

.login-box {
    background-color: #1e1e1e;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.7);
    width: 350px;
    text-align: center;
}

.login-header h2 {
    margin: 0;
    font-size: 24px;
    color: #264e86;
}

.login-header p {
    font-size: 14px;
    color: #a0a0a0;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
    padding-right: 20px;
}

.input-group label {
    display: block;
    font-size: 12px;
    margin-bottom: 5px;
    color: #a0a0a0;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #333;
    border-radius: 5px;
    background-color: #2a2a2a;
    color: #e0e0e0;
}

.input-group input::placeholder {
    color: #6c6c6c;
}

.forgot-password {
    display: block;
    text-align: right;
    font-size: 12px;
    color: #264e86;
    text-decoration: none;
    margin-top: 5px;
}

.forgot-password:hover {
    text-decoration: underline;
}

.remember-me {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.remember-me input {
    margin-right: 10px;
}

.remember-me label {
    font-size: 14px;
    color: #a0a0a0;
}

.login-btn {
    width: 100%;
    padding: 10px;
    background-color: #264e86;
    color: #121212;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.login-btn:hover {
    background-color: #264e8675;
}

.alternate-login-btn {
    width: 100%;
    padding: 10px;
    background-color: #3d3d3d;
    color: #e0e0e0;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    margin-top: 10px;
}

.alternate-login-btn:hover {
    background-color: #575757;
}

.signup-link {
    margin-top: 20px;
}

.signup-link p {
    font-size: 14px;
    color: #a0a0a0;
}

.signup-link a {
    color: #264e86;
    text-decoration: none;
}

.signup-link a:hover {
    text-decoration: underline;
}


    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <h2>Welcome Back!</h2>
                <p>Sign in to continue ...</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
              @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', 'admin@airline.com') }}" id="email" placeholder="Enter Email" autocomplete="email" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" value="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-password">Forgot password?</a>
                    @endif
                </div>
                <div class="remember-me">
                    <input type="checkbox"  id="remember" {{ old('rememberd') ? 'checked' : '' }}>
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit" class="login-btn">Log In</button>
                
            </form>
            
            <div class="signup-link">
                <p>Don't have an account? <a href="{{ route('register') }}" > Sign up now </a></p> <br>
                    <p>©
                        <script>
                          document.write(new Date().getFullYear()) 
                        </script>. <br> All rights reserved
                
            </div>
        </div>
    </div>
   
  </div>
  


   
</body>
</html>
