@extends('layout.layout')

@section('title')
	<title>Forgot Bruh!</title>
@endsection

@section('content')
	<div class="signup-page">
		<nav class="navbar navbar-transparent navbar-absolute">
	    	<div class="container">
	        	<!-- Brand and toggle get grouped for better mobile display -->
	        	<div class="navbar-header">
	        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
	            		<span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
	        		</button>
	        		<a class="navbar-brand" href="/">Jobs Seeker</a>
	        	</div>

	        	<div class="collapse navbar-collapse" id="navigation-example">
	        		<ul class="nav navbar-nav navbar-right">
			            <li>
			                {{ link_to(route('login'), 'Masuk') }}
			            </li>
			            <li>
			                <a href="#">
								Follow me at
							</a>
			            </li>
			            <li>
			                <a href="https://twitter.com/urayjordi" target="_blank" class="btn btn-simple btn-white btn-just-icon">
								<i class="fa fa-twitter"></i>
							</a>
			            </li>
			            <li>
			                <a href="https://www.facebook.com/odiejordie" target="_blank" class="btn btn-simple btn-white btn-just-icon">
								<i class="fa fa-facebook-square"></i>
							</a>
			            </li>
						<li>
			                <a href="https://www.instagram.com/odiejordie" target="_blank" class="btn btn-simple btn-white btn-just-icon">
								<i class="fa fa-instagram"></i>
							</a>
			            </li>
	        		</ul>
	        	</div>
	    	</div>
	    </nav>

	    <div class="wrapper">
			<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
							<div class="card card-signup">
								{{ Form::open(array('route' => array('reminders.update', $id, $code))) }}
									<div class="header header-primary text-center">
										<h4>Masukan password baru bro</h4>
									</div>
									<div class="content">

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">lock_outline</i>
											</span>
											{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password...')) }}
											<div class="text-danger"><small>{{ $errors->first('password') }}</small></div>
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">lock_outline</i>
											</span>
											{{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Password Confirm...')) }}
										</div>

									</div>
									<div class="footer text-center">
										{{ Form::submit('Kirim Kuy', array('class' => 'btn btn-simple btn-primary btn-lg')) }}
									</div>
								{{ Form::close() }}
							</div>
						</div>
					</div>
				</div>

				<footer class="footer" style="margin-top: 100px">
			        <div class="container">
			        	<nav class="pull-left">
							<ul>
								<li>
									{{ link_to(route('reminders.create'), 'Lupa password sini...') }}
								</li>
							</ul>
			            </nav>
			            <div class="copyright pull-right">
			                &copy; 2017, made with <i class="fa fa-heart heart"></i> by <a href="https://www.facebook.com/odiejordie" target="_blank">odiejordie</a>
			            </div>
			        </div>
			    </footer>

			</div>

	    </div>
	</div>
@endsection