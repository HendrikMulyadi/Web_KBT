<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ggu</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap"
      rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/CSS/form.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/css/all.css">
    <link rel="stylesheet" href="CSS/webfonts/fa-brands-400.ttf">
    @vite(['resources/scss/form.css','resources/js/app.js'])
</head>
        <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class=" align-items-center text-size:60px justify-items-center mb-3">
                            <h2 class="text-primary text-center ">RenGo</h2>
                            <h3 style="font-size: 20px">Sign Up</h3>
                    </div>
                    @if ((session()->has('Success')))
                    <div class="alert alert-success" role="alert">
                          {{session('succes')}}
                    </div>
                    @endif
                    <form action="{{route('registrasi.store')}}" method="POST">
                        @csrf
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" value="{{@old('name')}}" id="floatingText" placeholder="jhondoe">
                            <label for="floatingText">Username</label>
                        </div>
                         @error('email')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        <div class="form-floating mb-3">
                            <input type="text" name="email" class="form-control" value="{{@old('email')}}" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                         @error('password')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" value="{{@old('password')}}" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>

