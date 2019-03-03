<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-items/hotel-alpha/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 11:21:38 GMT -->
<head>
  
    <title>Hotel Alpha</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-submenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.min.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('css/skins/blue-light-2.css') }}">

    <!-- <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
 -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}">

    <script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>

</head>
<body>
<!-- Content area start -->
<div class="contact-bg overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- logo -->
                    <a href="#">
                      <img src="{{asset('image/images.jpeg')}}" style="margin: 150px; margin-left: 400px;">

                    </a>
                    <!-- details -->
                    <div class="details">
                        <h3>{{ trans('setting.sign') }}</h3>
                        <!-- Form start -->
                       {!! Form::open(['method' => 'POST', 'route' => 'login']) !!}

                         @if (count($errors)>0)
                       }
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)
                            {{ $err }}<br>
                            @endforeach
                        </div>
                        @endif
                        @if (session('status'))
                             <div class="alert alert-success">
                                 {{ session('status') }}
                             </div>
                        @endif
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                               <!-- <input type="email" name="email" class="input-text" placeholder="Email Address"> -->
                                {!! Form::email('email', null, ['id' => 'inputEmail', 'class' => 'form-control' , 'placeholder' => 'email', 'required', 'autofocus']) !!}
    
                            </div>
                            <div class="form-group">
                               <!-- <input type="password" name="password" class="input-text" placeholder="Password"> -->
                                  {!! Form::password('password', ['id' => 'inputPassword', 'class' => 'form-control' , 'placeholder' => 'password', 'required']) !!}
                            </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mb-0">
                              <!--  <button type="submit" class="btn-md btn-theme btn-block">login</button> -->
                              {!! Form::submit('login', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
                            </div>
                        </form>
                        <!-- Form end -->
                        {!! Form::close() !!}
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                         <h6>{{ trans('setting.sign_up') }}</h6><a href="{{ route('signup') }}">{{ trans('setting.sign_up_here') }}</a>
                    
                        </span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-submenu.js') }}"></script>
<script src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.scrollUp.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/jquery.filterizr.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>

</html>
