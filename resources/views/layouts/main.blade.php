<!DOCTYPE html>
<html dir="ltr" lang="en">

{{-- Header --}}
@include('layouts.header')

<body>
    {{-- Preloader --}}
    @include('layouts.preloader')

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        {{-- Navbar --}}
        @include('layouts.navbar')

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                {{-- Sidebar --}}
                @include('layouts.sidebar')
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
{{-- Script --}}
@include('layouts.script')
</body>

</html>
