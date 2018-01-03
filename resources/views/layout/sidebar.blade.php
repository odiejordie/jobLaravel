<div class="sidebar" data-color="purple" data-image="{{ asset('dashboard/img/sidebar-1.jpg') }}">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
	-->
    <div class="logo">
        <a href="#" class="simple-text">
            Joobs seeker
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{ url('user') }}">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a href="{{ url('user/'.$data->id.'/edit') }}">
                    <i class="material-icons">file_upload</i>
                    <p>Upload CV</p>
                </a>
            </li>
            <li>
                <a href="{{ url('user/create') }}">
                    <i class="material-icons">list</i>
                    <p>List Users</p>
                </a>
            </li>
            <li class="push-bottom">
                <a href="{{ url('logout') }}">
                    <i class="material-icons">power_settings_new</i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>