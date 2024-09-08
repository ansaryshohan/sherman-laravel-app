<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Sherman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugins -->
    <link href="/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>
    <div id="wrapper">
        {{-- header and sidebar --}}
        @include('master.shared.header')
        @include('master.shared.sidebar')

        <div class="content-page">
            {{-- page content --}}
            {{ $slot }}
            {{-- footer with the content --}}
            @include('master.shared.footer')
        </div>

    </div>

    {{-- right side bar --}}
    @include('master.shared.rightSidebar')
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="/assets/js/vendor.min.js"></script>

    <!-- optional plugins -->
    <script src="/assets/libs/moment/min/moment.min.js"></script>
    <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- page js -->
    <script src="/assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.min.js"></script>
</body>

</html>
