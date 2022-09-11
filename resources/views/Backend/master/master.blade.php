<!DOCTYPE html>
<html lang="en">
    @extends('Backend.includes.head')
    <body class="sb-nav-fixed">
        {{-- topbar start --}}
        @extends('Backend.includes.topbar')
        {{-- topbar end --}}

        <div id="layoutSidenav">
            {{-- leftbar start --}}
            @include('Backend.includes.leftbar')
            {{-- leftbar end --}}

            {{-- dashboard content part start --}}
            <div id="layoutSidenav_content">
                {{-- dashboard start --}}
                   {{-- @include('Backend.content') --}}

                   @yield('content')
                {{-- dashboard end --}}

                {{-- footer start --}}
                @include('Backend.includes.footer')
                {{-- footer end --}}

            </div>
            {{-- dashboard content part end --}}
        </div>

        @extends('Backend.includes.script')
    </body>
</html>
