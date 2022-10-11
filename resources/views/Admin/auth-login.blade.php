<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ url('public/assets/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ url('public/assets/css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ url('public/assets/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ url('public/assets/css/app-light.css') }}" id="lightTheme"  >
    <link rel="stylesheet" href="{{ url('public/assets/css/app-dark.css') }}" id="darkTheme" disabled>
  </head>
  <body class="">
    <div class="row border px-auto">
      <div class="col">

      </div>
      <div class="col">
        <div class="row">
          <div class="col ">
            <img src="{{url('public/assets/mini_logo.png')}}" width="100%">
          </div>

          <div class="col  ">
            <form method="post" action="{{url('login')}}" class="form-signin">
              @csrf
              <div class="account-logo">
                <a href="index-2.html"><img src="{{ url('public/assets/img/mini_logo.png')}}" alt=""></a>
              </div>
              @if(Session::has('status'))
                <div class="alert alert-danger text-center  ">
                  <span>
                    {{Session::get('status')}}
                  </span>
                </div>
              @endif
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group text-right">
                <a href="forgot-password.html">Forgot your password?</a>
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary account-btn">Login</button>
              </div>
              <div class="text-center register-link">
                Don’t have an account? <a href="{{ url('register') }}">Register Now</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>

</html>
</body>
</html>