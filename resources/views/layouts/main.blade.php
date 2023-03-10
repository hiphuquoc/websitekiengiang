<!DOCTYPE html>
<html lang="vi">

<!-- === START:: Head === -->
<head>
    @include('main.snippets.head')
</head>
<!-- === END:: Head === -->

<!-- === START:: Body === -->
<body>
    <div id="js_blurBackground">
        <!-- === START:: Content === -->
        @yield('content')

        <!-- === START:: Footer === -->
        @include('main.snippets.footer')
        <!-- === END:: Footer === -->

        {{-- <div class="bottom">
            <div id="gotoTop" class="gotoTop" onclick="javascript:gotoTop();" style="display: block;">
                <i class="fas fa-chevron-up"></i>
            </div>
            @stack('bottom')
        </div> --}}

        <div class="bottom">
            <div id="smoothScrollToTop" class="gotoTop" onclick="javascript:smoothScrollToTop();" style="display: block;">
                <i class="fas fa-chevron-up"></i>
            </div>
            @stack('bottom')
        </div>
    </div>
    <!-- Modal -->
    @stack('modal')
    <!-- === START:: Scripts Default === -->
    @include('main.snippets.scriptDefault')
    <!-- === END:: Scripts Default === -->

    <!-- === START:: Scripts Custom === -->
    @stack('scriptCustom')
    <!-- === END:: Scripts Custom === -->
</body>
<!-- === END:: Body === -->

</html>