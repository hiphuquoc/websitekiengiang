<!DOCTYPE html>
<html lang="vi">

<!-- === START:: Head === -->
<head>
    @include('main.snippets.head')
</head>
<!-- === END:: Head === -->

<!-- === START:: Body === -->
<body>
    <div class="blurBackground" style="background:url('https://media.tapchitaichinh.vn/w1480/images/upload/vuminh/2018_03_30/tecnologia-computador-teclado-notebook_CCOU.jpg') no-repeat;background-size:100% 100%;width:100%;height:100%;position:fixed;z-index:-1;"></div>
    
    <!-- Modal -->
    @include('admin.login.form')
    <!-- === START:: Scripts Default === -->
    @include('main.snippets.scriptDefault')
    <!-- === END:: Scripts Default === -->

    <!-- === START:: Scripts Custom === -->
    @stack('scriptCustom')
    <!-- === END:: Scripts Custom === -->
</body>
<!-- === END:: Body === -->

</html>