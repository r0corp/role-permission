<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<title>{{ config('app.name', 'Laravel') }}</title>

<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- CSS Files -->
<link href="{{ asset('Backend/assets/css/material-dashboard.css') }}" rel="stylesheet" />
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<style>
    .form-control,
    .is-focused .form-control {
        background-image: linear-gradient(to top, #00acc1 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
    }

    .form-check .form-check-input:checked~.form-check-sign .check {
        background: #00acc1;
    }

    form .form-group select.form-control {
        height: auto;
        position: relative !important;
    }

</style>
