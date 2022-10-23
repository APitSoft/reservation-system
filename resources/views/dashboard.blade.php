@extends('layout.master')
@section('title', 'Forkk | Dashboard')

@section('container-fluid')
<div class="container-fluid">
<div class="page-header">
    <div class="row">
    <div class="col-lg-6">
        <div class="col-lg-6 d-flex align-items-center">
        <i data-feather="server" class="mr-2"></i>
        <h3>DASHBOARD</h3>
        </div>
    </div>
    <div class="col-lg-6">
        <!-- Bookmark Start-->
        <div class="bookmark pull-right">
        <ul>
            <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
            <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
            <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
            <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
            <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
            <form class="form-inline search-form">
                <div class="form-group form-control-search">
                <input type="text" placeholder="Search..">
                </div>
            </form>
            </li>
        </ul>
        </div>
        <!-- Bookmark Ends-->
    </div>
    </div>
</div>
</div>
@endsection

{{-- 
@extends('layout.master')
@section('title', 'Forkk | Dashboaard')


@section('header_links')

@endsection


@section('container-fluid')

@endsection 

@section('footer_links')

@endsection
--}}


{{-- 
{{asset('  ')}}
@yield('title')
@yield('header_links')
@stack('header-custom-scripts') 
@yield('footer_links')
@stack('footer-custom-scripts')
{{route('admin.dashboard')}}
--}}