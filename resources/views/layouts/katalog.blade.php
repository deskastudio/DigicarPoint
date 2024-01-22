<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" >

</head>
<body>
    <div class="container py-5">
        @if (Auth::check())
        @include('komponen/menu')
        @endif
        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var form = $(this).closest('form');

                Swal.fire({
                    title: 'Yakin ingin hapus data?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus data!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If confirmed, submit the form
                        form.submit();
                    }
                });
            });
        });
    </script>

<script type="text/javascript">
    function showAlert(title, text, icon) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
    }

    $(function() {
        // New script for success message on create
        @if (Session::has('success'))
            showAlert('Success', '{{ Session::get('success') }}', 'success');
            {{ Session::forget('success') }} // Clear the success message from the session
        @endif
    });
</script>
</html>
