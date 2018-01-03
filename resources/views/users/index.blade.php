@extends('layout.dashboard')

@section('title')
	<title>Welcome {{ $data->first_name }} {{ $data->last_name }}</title>
@endsection

@section('content')
	<div class="wrapper">
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Profile {{ $data->first_name }} {{ $data->last_name }}</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Edit Profile</h4>
                                    <p class="category">Complete your profile</p>
                                </div>
                                <div class="card-content">
                                    {{-- UPDATE DATA YANG UDAH ADA DETAIL --}}
                                    {{ Form::open(array('route' => array('user.update', $data->id), 'method' => 'PUT', 'files' => 'true')) }}
                                        {{ Form::hidden('user_id', Sentinel::getUser()->id)}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    {{ Form::email('email', $data->email, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('email') }}</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Fist Name</label>
                                                    {{ Form::text('first_name', $data->first_name, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('first_name') }}</small></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    {{ Form::text('last_name', $data->last_name, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('last_name') }}</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Adress</label>
                                                    {{ Form::text('alamat', $data->alamat, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('alamat') }}</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">City</label>
                                                    {{ Form::text('kota', $data->kota, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('kota') }}</small></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Country</label>
                                                    {{ Form::text('negara', $data->negara, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('negara') }}</small></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Postal Code</label>
                                                    {{ Form::text('kodepos', $data->kodepos, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('kodepos') }}</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Skill</label>
                                                    {{ Form::text('keahlian', $data->keahlian, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('keahlian') }}</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> I like sandwitch :3</label>
                                                        {{ Form::textarea('bio', $data->bio, array('class' => 'form-control', 'rows' => '5')) }}
                                                        <div class="text-danger"><small>{{ $errors->first('bio') }}</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Foto Profile</label>
                                                {{ Form::file('foto', array('class' => 'btn btn-primary')) }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Wall Picture</label>
                                                {{ Form::file('background', array('class' => 'btn btn-primary')) }}
                                            </div>
                                        </div>
                                        {{ Form::hidden('tipe', 'update_profile') }}
                                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div>
                                    <a href="#pablo">
                                        <img class="img-fluid" src="{{ asset($data->foto) }}" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">{{ $data->keahlian }}</h6>
                                    <h4 class="card-title">{{ $data->first_name }} {{ $data->last_name }}</h4>
                                    <p class="card-content">
                                        {{ $data->bio }}
                                    </p>
                                    {{-- <a href="#pablo" class="btn btn-primary btn-round">Open profile page</a> --}}
                                    {{ link_to(route('user.show', Sentinel::getUser()->id), 'Open profile page', array('class' => 'btn btn-primary btn-round')) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Jobs seeker</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
@endsection