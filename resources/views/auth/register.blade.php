<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Campus663 Livin | Login</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/plugins/font-awesome/css/all.min.css" rel="stylesheet" />
    <link href="/css/animate.min.css" rel="stylesheet" />
	<link href="/css/style.css" rel="stylesheet" />
	<link href="/css/style-responsive.css" rel="stylesheet" />
	<link href="/css/default.css" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <link href="/plugins/parsley/src/parsley.css" rel="stylesheet" />
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register Customer') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/js/js.cookie.js"></script>
	<script src="/js/default.min.js"></script>
	<script src="/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script src="/plugins/parsley/dist/parsley.js"></script>
	<script src="/plugins/highlight/highlight.common.js"></script>
	<script src="/js/demo/render.highlight.js"></script>

	<script>
		$(document).ready(function() {
			App.init();
            Highlight.init();
		});
	</script>
</body>
</html>
