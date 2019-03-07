@extends("layout.app")
@section("content")
<link rel="stylesheet" type="text/css" href="{{asset('css/client/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/admin/admin.css')}}">

    @include("admin.admin-nav")
    @include("pages.main")
    @include("layout.clientFoot")
@endsection


