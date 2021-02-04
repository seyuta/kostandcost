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
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(/images/bg-login.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>Campus663</b> Livin</h4>
					<p>
						Campus663 Livin adalah indekos yang nyaman dan strategis, terletak di kawasan Universitas Jendral Soedirman
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						<span class="logo"></span> <b>Login</b> Aplikasi
					</div>
					<div class="icon">
						<i class="fa fa-sign-in"></i>
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
                    <form action="{{ route('login') }}" method="POST" class="margin-bottom-0" data-parsley-validate="true">
                        @csrf
						<div class="form-group m-b-15">
                            <input type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="Username" autofocus required />
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group m-b-15">
                            <input type="password" class="form-control form-control-lg @error('username') is-invalid @enderror" id="password" name="password" placeholder="Password" required autocomplete="current-password" />
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="remember_me_checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />
							<label for="remember_me_checkbox">
							Remember Me
							</label>
						</div>
						<div class="login-buttons">
							<button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
						</div>
						<hr />
						<p class="text-center text-grey-darker">
							&copy; 2019 Kostandcost - <a href="mailto:seyuta.a.h@gmail.com?subject=Feedback for KostAndCost Application">Seyuta Asagung H</a> All Rights Reserved
						</p>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->
	</div>
	<!-- end page container -->
	
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