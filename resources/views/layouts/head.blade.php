<!-- Title -->
<title>@yield("title")</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />

<!-- Font -->
<!--begin::Vendor Stylesheets(used by this page)-->
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/global/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/plugins.custom.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/plugins.custom.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/style.bundle.rtl.css' )}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/style.bundle.css' )}}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->

{{-- <link href="{{ URL::asset('css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">
@yield('css')
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet"> --}}
<!--- Style css -->

{{-- @if (App::getLocale() == 'ar')
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('assets/css/ltr.css') }}" rel="stylesheet">
@endif --}}
