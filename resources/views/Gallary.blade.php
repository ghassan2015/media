<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'File Manager') }}</title>
    {{-- Styles package --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link href="{{ asset('vendor/file-manager/css/file-manager.css') }}" rel="stylesheet">
   {{--end Style package--}}
    {{-- Models--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{--end Model--}}

    {{--bootstrap ar--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    {{--end bootstrap en --}}

    {{--bootstrap en--}}

    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">--}}
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">--}}

    {{--end bootstrap en --}}
</head>
<body>


            <div class="col-md-12" id="fm-main-block" style="height: 130%">

            <div id="fm"></div>
            </div>








<!-- File manager -->
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementsByClassName('fm-body').setAttribute('style', 'height:' +700 + 'px');

            fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
                window.opener.fmSetLink(fileUrl);
                window.close();
            });
    });

</script>
</body>
</html>
