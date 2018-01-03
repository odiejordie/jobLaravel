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
                <a href="{{ url('admin') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ url('list') }}">
                    <i class="material-icons">person</i>
                    <p>Kelola User</p>
                </a>
            </li>
            <li>
                <a href="{{ url('cv') }}">
                    <i class="material-icons">assignment_returned</i>
                    <p>Kelola CV</p>
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