<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="images/login.png"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Register Any Trip</p>
                </div>

                <div class="divider d-flex align-items-center my-4"></div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
               @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1">Your name</label>
                    <input type="name" id="name" name="name"class="form-control form-control-lg"
                      placeholder="Enter your name" />
                    @error('name')
                      {{ $message }}
                    @enderror
                  </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="email" name="email"class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                  @error('email')
                    {{ $message }}
                  @enderror
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg"
                    placeholder="Enter password" />
                  @error('password')
                  {{ $message }}
                @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center">


                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-lg" style="background-color: #8FBC8F"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">I have an account <a href="{{ route('login') }}"
                        class="link-danger">Login</a></p>
                </div>

              </form>
            </div>
          </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5" style="background-color: #8FBC8F">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
          </div>
          <!-- Copyright -->

        </div>
    </section>
</body>
</html>





