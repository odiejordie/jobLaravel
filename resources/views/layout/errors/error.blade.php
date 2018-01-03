@if (Session::has('error'))
	<script>
		toastr.error('{{ Session::get('error') }}');
	</script>
@endif
@if (Session::has('notice'))
	<script>
		toastr.success('{{ Session::get('notice') }}');
	</script>
@endif