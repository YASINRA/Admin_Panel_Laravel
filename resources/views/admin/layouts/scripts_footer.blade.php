<script src="{{ asset('dist-admin/js/scripts.js') }}"></script>
<script src="{{ asset('dist-admin/js/custom.js') }}"></script>


@if($errors->any())
    @foreach($errors->all() as $error)
    <script>
        iziToast.error({
            message: '{{ $error }}',
            position: 'topRight',
        });
    </script>
    @endforeach
@endif

@if(session()->get('error'))
<script>
    iziToast.error({
        message: '{{ session()->get('error') }}',
        position: 'topRight',
    });
</script>
@endif

@if(session()->get('success'))
<script>
    iziToast.success({
        message: '{{ session()->get('success') }}',
        position: 'topRight',
    });
</script>
@endif