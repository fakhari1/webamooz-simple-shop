@if(session()->has('success_msg'))
    <script>
        $(document).ready(function () {
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'عملیات موفق!',
                text: '{{ session('success_msg') }}',
                showConfirmButton: false,
                timer: 2500
            })
        });
    </script>
@endif

@if(session()->has('error_msg'))
    <script>
        $(document).ready(() => {
            Swal.fire({
                icon: 'error',
                title: 'خطای سیستم',
                text: '{{ session('error_msg') }}',
            });
        });
    </script>
@endif

