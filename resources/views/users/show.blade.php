@extends('layout.profile')

@section('title')
	<title>Hello {{ $data->first_name." ".$data->last_name }}</title>
@endsection

@section('content')
    <div class="profile-page">
    	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Jobs seeker</a>
                </div>

                <div class="collapse navbar-collapse" id="navigation-example">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            {{ link_to(route('user.index'), 'Settings') }}
                        </li>

                        <li>
                            {{ link_to(url('logout'), 'Logout')}}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper">
            <div class="header header-filter" style="background-image: url({{ asset($data->background) }});"></div>

            <div class="main main-raised">
                <div class="profile-content">
                    <div class="container">
                        <div class="row">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="{{ asset($data->foto) }}" alt="Circle Image" class="img-fluid img-rounded img-responsive img-raised">
                                </div>
                                <div class="name">
                                    <h3 class="title">{{ $data->first_name." ".$data->last_name }}</h3>
                                    <h6>{{ $data->keahlian }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="description text-center">
                            <p>{{ $data->bio }}</p>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="profile-tabs">
                                    <div class="nav-align-center">
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="active">
                                                <a href="#cv" role="tab" data-toggle="tab">
                                                    <i class="material-icons">camera</i>
                                                    CV
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pr" role="tab" data-toggle="tab">
                                                    <i class="material-icons">palette</i>
                                                    Portofolio
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content gallery">
                                            <div class="tab-pane active" id="cv">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        @if($data->cv == '-')
                                                        <p>Belum memasukan Curiculum vitae</p>
                                                        @else
                                                        <img src="{{ asset($data->cv) }}" class="img-rounded" />
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane text-center" id="pr">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="{{ asset('img/examples/chris5.jpg') }}" class="img-rounded" />
                                                        <img src="{{ asset('img/examples/chris7.jpg') }}" class="img-rounded" />
                                                        <img src="{{ asset('img/examples/chris9.jpg') }}" class="img-rounded" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img src="{{ asset('img/examples/chris6.jpg') }}" class="img-rounded" />
                                                        <img src="{{ asset('img/examples/chris8.jpg') }}" class="img-rounded" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Profile Tabs -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                               About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 2017, made with <i class="fa fa-heart heart"></i> by <a href="https://www.facebook.com/odiejordie" target="_blank">odiejordie</a>
                </div>
            </div>
        </footer>
    </div>
@endsection