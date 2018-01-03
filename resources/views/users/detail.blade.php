@extends('layout.layout')

@section('title')
    <title>Isi Detail Bruh!</title>
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
                            {{ link_to(route('logout'), 'Keluar') }}
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
                        <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                            <div class="card card-signup">
                                {{ Form::open(array('route' => 'user.store', 'files' => 'true')) }}
                                    <div class="header header-primary text-center">
                                        <h4>Isi profil dulu bro</h4>
                                        <div class="social-line">
                                            <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content" style="margin-left: 15px">
                                        {{ Form::hidden('user_id', Sentinel::getUser()->id)}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Adress</label>
                                                    {{ Form::text('alamat', null, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('alamat') }}</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">City</label>
                                                    {{ Form::text('kota', null, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('kota') }}</small></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Country</label>
                                                    {{ Form::text('negara', null, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('negara') }}</small></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Postal Code</label>
                                                    {{ Form::text('kodepos', null, array('class' => 'form-control')) }}
                                                    <div class="text-danger"><small>{{ $errors->first('kodepos') }}</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Skill</label>
                                                    {{ Form::text('keahlian', null, array('class' => 'form-control')) }}
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
                                                        {{ Form::textarea('bio', null, array('class' => 'form-control', 'rows' => '5')) }}
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
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="footer text-center">
                                        {{ Form::submit('Update terus Kuy', array('class' => 'btn btn-simple btn-primary btn-lg')) }}
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <div class="container">
                        <div class="copyright" style="text-align: center">
                            &copy; 2017, made with <i class="fa fa-heart heart"></i> by <a href="https://www.facebook.com/odiejordie" target="_blank">odiejordie</a>
                        </div>
                    </div>
                </footer>

            </div>

        </div>
    </div>
@endsection