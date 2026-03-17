<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
    {{ config('app.name','INCOBIST') }}
    @isset($title) | {{ $title }} @endisset
</title>
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="{{ asset('asset/image/fav-icon.png') }}" sizes="16x16" type="image/png">
    <!-- Page Specific CSS -->
    @stack('styles')
</head>

<body>
    <!-- ====== navbar section start ====== -->
    @include('layouts.navbar')
    <!-- Header End -->

    {{ $slot }}


    <!-- ==================== footer section start ===================== -->
    @include('layouts.footer')
    <!-- Footer End -->

    <!-- script for leadership carousel -->
    <script src="{{ asset('asset/js/leadership.js') }}"></script>
    <!-- Font Awesome Icons -->
    <!-- ========== js for navbar ========= -->
    <script src="{{ asset('asset/js/navbar.js') }}"></script>

    <!-- ========== js for faq ========= -->
    <script src="{{ asset('asset/js/faq.js') }}"></script>

    <!-- ========== js for blog-section ========= -->
    <script src="{{ asset('asset/js/blog-section.js') }}"></script>
    <!-- ========== js for experience ========= -->
    <script src="{{ asset('asset/js/experience.js') }}"></script>
    <!-- ========== js for accordion ========= -->
    <script src="{{ asset('asset/js/company-accordion.js') }}"></script>
    <!-------- about image js  -------->
    <script src="{{ asset('asset/js/about-image.js') }}"></script>
    <!-- ========== js for solution box ========= -->
    <script src="{{ asset('asset/js/solution.js') }}"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- inject js end -->

    <script type="text/javascript">
        lozad('.lozad', {
            load: function(el) {
                el.src = el.dataset.src;
                el.onload = function() {

                }
            }
        }).observe()
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

    <script>
        $("#submitForm").on('submit', function(e) {
            e.preventDefault();
            var data = new FormData(this);
            //alert(data);
            if ($(this).parsley().isValid()) {
                $.ajax({
                    type: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $("#submitBtn").attr("disabled", true);
                        $('#submitSpin').show();
                    },
                    success: function(response) {
                        console.log(response);
                        //alert(response);
                        $("#submitBtn").removeAttr("disabled");
                        $('#submitSpin').hide();
                        var response = JSON.parse(response);
                        if (response[0].isMsg == true) {
                            if (response[0].wayOfMsg == 'notify') {
                                $('.notifyjs-wrapper').remove();
                                $("#submitBtn").notify("" + response[0].msg + "", "" + response[0].res + "");
                            } else if (response[0].wayOfMsg == 'swal') {
                                Swal.fire("" + (response[0].res).charAt(0).toUpperCase() + (response[0].res).slice(1) + " !", "" + response[0].msg + "", "" + response[0].res + "");
                            }
                        }
                        if (response[0].res == 'success') {
                            window.setTimeout(function() {
                                $('#exampleModalScrollable').modal('hide');
                                $('.table-striped').bootstrapTable('refresh');
                            }, 800);
                        }

                        if (response[0].isRedirect == true) {
                            if (response[0].wayOfRedirect == 'reload') {
                                window.setTimeout(function() {
                                    window.location.reload();
                                }, 800);
                            } else if (response[0].wayOfRedirect == 'redirect') {
                                window.setTimeout(function() {
                                    window.location.href = response[0].redirectLink;
                                    $('#exampleModalScrollable').modal('hide');
                                    $('.table-striped').bootstrapTable('refresh');
                                }, 800);
                            }
                        }
                    },
                    error: function() {
                        // window.location.reload();
                        $("#submitBtn").removeAttr("disabled");
                        $('#submitSpin').hide();
                        console.log('Something Went Wrong ! Please Try Again.');
                    }
                });
            } else {
                return false;
            }

        });



        $("#submitForm1").on('submit', function(e) {
            e.preventDefault();
            var data = new FormData(this);
            //alert(data);
            if ($(this).parsley().isValid()) {
                $.ajax({
                    type: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $("#submitBtn1").attr("disabled", true);
                        $('#submitSpin1').show();
                    },
                    success: function(response) {
                        console.log(response);
                        // alert(response);
                        $("#submitBtn1").removeAttr("disabled");
                        $('#submitSpin1').hide();
                        var response = JSON.parse(response);
                        if (response[0].isMsg == true) {
                            if (response[0].wayOfMsg == 'notify') {
                                $('.notifyjs-wrapper').remove();
                                $("#submitBtn1").notify("" + response[0].msg + "", "" + response[0].res + "");
                            } else if (response[0].wayOfMsg == 'swal') {
                                Swal.fire("" + (response[0].res).charAt(0).toUpperCase() + (response[0].res).slice(1) + " !", "" + response[0].msg + "", "" + response[0].res + "");
                            }
                        }
                        if (response[0].res == 'success') {
                            window.setTimeout(function() {
                                $('#exampleModalScrollable').modal('hide');
                                $('.table-striped').bootstrapTable('refresh');
                            }, 800);
                        }

                        if (response[0].isRedirect == true) {
                            if (response[0].wayOfRedirect == 'reload') {
                                window.setTimeout(function() {
                                    window.location.reload();
                                }, 800);
                            } else if (response[0].wayOfRedirect == 'redirect') {
                                window.setTimeout(function() {
                                    window.location.href = response[0].redirectLink;
                                    $('#exampleModalScrollable').modal('hide');
                                    $('.table-striped').bootstrapTable('refresh');
                                }, 800);
                            }
                        }
                    },
                    error: function() {
                        // window.location.reload();
                        $("#submitBtn1").removeAttr("disabled");
                        $('#submitSpin1').hide();
                        console.log('Something Went Wrong ! Please Try Again.');
                    }
                });
            } else {
                return false;
            }

        });
    </script>
    <script>
toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "timeOut": "4000",
    "extendedTimeOut": "1000",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
</script>
    <!-- Page Specific JS -->
    @stack('scripts')

</body>

</html>