<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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

.signup-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
}

.signup-box {
    background-color: #1e1e1e;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.7);
    width: 450px;
    text-align: center;
    max-height: 90vh; /* Set maximum height */
    overflow-y: auto; /* Add vertical scroll if content exceeds max-height */
}


        .signup-header h2 {
            margin: 0;
            font-size: 24px;
            color: #264e86;
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

        .signup-btn {
            width: 100%;
            padding: 10px;
            background-color: #264e86;
            color: #121212;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .signup-btn:hover {
            background-color: #264e869f;
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
        /* Styling for valid feedback */
.valid-feedback {
    color: #28a745;
    display: none;
    font-size: 12px;
    margin-top: 5px;
}

/* Styling for invalid feedback */
.invalid-feedback {
    color: #dc3545;
    display: none;
    font-size: 12px;
    margin-top: 5px;
}

/* Show feedback when input is invalid */
input:invalid ~ .invalid-feedback {
    display: block;
}

/* Show feedback when input is valid */
input:valid ~ .valid-feedback {
    display: block;
}

    </style>
</head>
<body>
    <div class="signup-container">
        <div class="signup-box">
            <div class="signup-header">
                <h2>Register Yourself</h2>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="needs-validation" novalidate method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}" required>
                    <div class="valid-feedback">
                        @lang('validation.good')
                    </div>
                    <div class="invalid-feedback">
                        @lang('validation.required', ['attribute' => __('attributes.name')])
                    </div>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                    <div class="valid-feedback">
                        @lang('validation.good')
                    </div>
                    <div class="invalid-feedback">
                        @lang('validation.required', ['attribute' => __('attributes.email')])
                    </div>
                </div>
                <div class="input-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter phone" value="{{ old('phone') }}" required>
                    <div class="valid-feedback">
                        @lang('validation.good')
                    </div>
                    <div class="invalid-feedback">
                        @lang('validation.required', ['attribute' => __('attributes.phone')])
                    </div>
                </div>
                <div class="input-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" placeholder="Enter address" value="{{ old('address') }}" required>
                    <div class="valid-feedback">
                        @lang('validation.good')
                    </div>
                    <div class="invalid-feedback">
                        @lang('validation.required', ['attribute' => __('attributes.address')])
                    </div>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                    <div class="valid-feedback">
                        @lang('validation.good')
                    </div>
                    <div class="invalid-feedback">
                        @lang('validation.required', ['attribute' => __('attributes.password')])
                    </div>
                </div>
                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter password again" required>
                    <div class="valid-feedback">
                        @lang('validation.good')
                    </div>
                    <div class="invalid-feedback">
                        @lang('validation.required', ['attribute' => __('attributes.password_confirmation')])
                    </div>
                </div>
                <button type="submit" class="signup-btn">Sign Up</button>
            </form>
            <div class="signup-link">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                <p>©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>. <br> All rights reserved
                </p>
            </div>
        </div>
    </div>

    @section('script')
    <!-- validation init -->
    <script src="{{ URL::asset('/assets/js/validation.init.js') }}"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.needs-validation');

    form.addEventListener('submit', function(event) {
        // Prevent form submission if there are invalid fields
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    }, false);

    // Add event listeners for real-time validation
    const inputs = form.querySelectorAll('input');

    inputs.forEach(input => {
        input.addEventListener('input', function() {
            if (input.checkValidity()) {
                input.classList.add('is-valid');
                input.classList.remove('is-invalid');
            } else {
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');
            }
        });
    });
});

    </script>
    @endsection
</body>
</html>