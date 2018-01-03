<script src="{{ asset('dashboard/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/toastr.js') }}"></script>
<script src="{{ asset('js/customtoast.js') }}"></script>
<script src="{{ asset('dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dashboard/js/material.min.js') }}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{ asset('dashboard/js/chartist.min.js') }}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{ asset('dashboard/js/arrive.min.js') }}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{ asset('dashboard/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('dashboard/js/bootstrap-notify.js') }}"></script>
<!--  Google Maps Plugin    -->
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('dashboard/js/material-dashboard.js?v=1.2.0') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in dashboard/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

<script type="text/javascript">
	$(function(){
		$('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
		$('.nav a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')	
		})
	})
</script>