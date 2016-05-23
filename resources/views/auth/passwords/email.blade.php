<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>I4-Communication</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
</head>
<body style="background:#F7F7F7;">
<div id="wrapper">
    <div id="login" class=" form">
        <section class="login_content">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}
                <h1>Reset Password</h1>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>E-Mail Address</label>

                    <div>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-default submit">
                            <i class="fa fa-btn fa-envelope"></i>Send Password Reset Link
                        </button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                    <div>
                        <h1>I4 Communication</h1>
                        <p>©2016 All Rights Reserved.</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
</body>
</html>