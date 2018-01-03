@extends('layout.dashboardadmin')

@section('title')
	<title>Welcome</title>
@endsection

@section('content')
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
                    <a class="navbar-brand" href="#"> Kelola CV </a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">List Curiculum Vitae Pengguna</h4>
                                <p class="category">Klik download CV untuk melihat CV pengguna</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Name</th>
                                        <th>Status CV</th>
                                        <th>CV</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $row)
                                        <tr>
                                            <td>{{ $row->first_name.' '.$row->last_name }}</td>
                                            <td>{{ $row->status_cv }}</td>
                                            @if($row->cv != '-' && $row->status_cv == '-')
                                                <td>Sudah upload CV menunggu persetujuan</td>
                                            @elseif($row->cv == '-' && $row->status_cv == '-')
                                                <td>Belum upload CV</td>
                                            @elseif($row->cv != '-' && $row->status_cv == 'Terima')
                                                <td>CV sudah diterima</td>
                                            @elseif($row->cv != '-' && $row->status_cv == 'Tolak')
                                                <td>CV sudah ditolak</td>
                                            @endif
                                            <td class="text-primary">
                                                {{ Form::open(array('route' => array('admin.update', $row->id), 'method' => 'PUT')) }}
                                                @if($row->status_cv == 'Terima')
                                                    <a href="{{ asset($row->cv) }}" download>Download CV</a>
                                                @elseif($row->status_cv == 'Tolak')
                                                    CV ditolak
                                                @elseif($row->cv != '-')
                                                    <input type="submit" name="status" value="Terima" class="btn btn-sm btn-success"> 
                                                    <input type="submit" name="status" value="Tolak" class="btn btn-sm btn-danger"> 
                                                @else
                                                    Belum Upload CV
                                                @endif
                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
@endsection