<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 403</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/css/boxicons.min.css">
    <style>
      body.dark-theme {
    background-color: #1c1c1c;
    color: #ffffff;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.text-center {
    text-align: center;
}

.mb-5 {
    margin-bottom: 3rem;
}

.my-5 {
    margin-top: 3rem;
    margin-bottom: 3rem;
}

.pt-5 {
    padding-top: 3rem;
}

.display-2 {
    font-size: 4rem;
    font-weight: 500;
}

.display-3 {
    font-size: 3rem;
}

.fw-medium {
    font-weight: 500;
}

.text-uppercase {
    text-transform: uppercase;
}

.text-primary {
    color: #007bff;
}

.btn {
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
}

.btn-primary {
  background-color: #264e86;;
    color: #ffffff;
    border: none;
    transition: background-color 0.3s;
}

.btn-primary:hover {
  background-color: #264e8675;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.bx-spin {
    animation: spin 2s infinite linear;
}

@keyframes spin {
    100% {
        transform: rotate(360deg);
    }
}

    </style>
</head>
<body class="dark-theme">

    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5 text-center">
                        <h1 class="display-2 fw-medium">4<i class="bx bx-buoy bx-spin text-primary display-3"></i>3</h1>
                        <h4 class="text-uppercase">Sorry, you are not supposed to be on this page</h4>
                        <div class="mt-5 text-center">
                            <a class="btn btn-primary waves-effect waves-light" href="{{ auth()->user()->is_admin ? route('root') : route('profile') }}">Back to {{ auth()->user()->is_admin ? 'Dashbaord' : 'Profile' }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-6">
                    <div>
                        <img src="{{ URL::asset('/assets/images/error-img.png') }}" alt="Error Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/boxicons.min.js"></script>
</body>
</html>
