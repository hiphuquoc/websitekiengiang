@extends('layouts.main')
@push('headCustom')
<!-- ===== START:: SCHEMA ===== -->
<!-- STRAT:: Title - Description - Social -->
@include('main.schema.social', ['data' => $item])
<!-- END:: Title - Description - Social -->

<!-- STRAT:: Organization Schema -->
@include('main.schema.organization')
<!-- END:: Organization Schema -->


<!-- STRAT:: Article Schema -->
@include('main.schema.article', ['data' => $item])
<!-- END:: Article Schema -->

<!-- STRAT:: Article Schema -->
@include('main.schema.creativeworkseries', ['data' => $item])
<!-- END:: Article Schema -->

<!-- STRAT:: Product Schema -->
@php
    $highPrice  = 14250000;
    $lowPrice   = 100000000;
@endphp
@include('main.schema.product', ['data' => $item, 'lowPrice' => $lowPrice, 'highPrice' => $highPrice])
<!-- END:: Product Schema -->

{{-- <!-- STRAT:: Article Schema -->
@include('main.schema.breadcrumb', ['data' => $breadcrumb])
<!-- END:: Article Schema --> --}}

<!-- STRAT:: FAQ Schema -->
@include('main.schema.faq', ['data' => $faqs])
<!-- END:: FAQ Schema -->

{{-- @php
    $dataList           = new \Illuminate\Support\Collection();
    if(!empty($item->tours)&&$item->tours->isNotEmpty()){
        foreach($item->tours as $tour){
            $dataList[] = $tour->infoTour;
        }
    }
@endphp
<!-- STRAT:: Article Schema -->
@include('main.schema.itemlist', ['data' => $dataList])
<!-- END:: Article Schema --> --}}

<!-- ===== END:: SCHEMA ===== -->
@endpush
@section('content')
    <div style="overflow: hidden;">
        @include('main.home.slider')
        <div id="js_buildTocContentSidebar_element">
            <!-- Về chúng tôi -->
            <div class="sectionBox">
                <div class="container">
                    @include('main.home.aboutUs')
                </div>
            </div>
            
            <!-- Nên chọn website chất lượng hay giá rẻ -->
            <div class="sectionBox" style="background: linear-gradient(245deg, #EDF2F7 55%, #ffffd1 5%);">
                <div class="container">
                    @include('main.home.aboutQuanlity')
                </div>
            </div>
            <!-- Giao diện đẹp chuẩn Ux/Ui có ý nghĩa như thế nào -->
            <div class="sectionBox" style="background:rgb(0,85,85);">
                <div class="container">
                    @include('main.home.aboutTemplate')
                </div>
            </div>
            <!-- Lợi ích website chuẩn Seo -->
            <div class="sectionBox" style="background:#fff;">
                <div class="container">
                    @include('main.home.aboutSeo')
                </div>
            </div>
            <!-- Tôi ưu -->
            <div class="sectionBox" style="background:linear-gradient(100deg, rgb(0,85,85) 70%, #069A8E 30%);">
                <div class="container">
                    @include('main.home.aboutSpeed')
                </div>
            </div>
            <!-- Dễ sử dụng và mở rộng -->
            <div class="sectionBox" style="background:#fff;">
                <div class="container">
                    @include('main.home.aboutExplain')
                </div>
            </div>
            {{-- <!-- Dịch vụ Thiết kế website Kiên Giang có gì đặc biệt -->
            <div class="sectionBox backgroundImage1">
                @include('main.home.special')
            </div> --}}
            <!-- Dịch vụ Thiết kế website Kiên Giang có gì đặc biệt -->
            <div class="sectionBox">
                @include('main.home.special')
            </div>
            <!-- Quy trình thiết kế website -->
            <div class="sectionBox" style="background:linear-gradient(245deg, #EDF2F7 55%, #ffffd1 5%);">
                @include('main.home.step')
            </div>
            <!-- Bảng giá Thiết kế website Kiên Giang -->
            <div class="sectionBox" style="background:#ffffd1;">
                @include('main.home.price')
            </div>
            <!-- Câu hỏi thường gặp -->
            <div class="sectionBox">
                @include('main.home.faq')
            </div>
            {{-- <!-- Nội dung -->
            <div class="sectionBox withBorder">
                <div class="container">
                    @include('main.home.content')
                </div>
            </div> --}}

            <!-- tocContent main -->
            <div id="tocContentMain"></div>
        </div>
    </div>
@endsection
@push('scriptCustom')
    <script type="text/javascript">
        // $(document).ready(function(){
        //     setSlick();
        // })
        // $(window).resize(function(){
        //     setSlick();
        // })
        // function setSlick(){
        //     $('.serviceGrid').slick({
        //         infinite: false,
        //         slidesToShow: 3,
        //         slidesToScroll: 3,
        //         arrows: true,
        //         prevArrow: '<button class="slick-arrow slick-prev" aria-label="Slide trước"><i class="fa-solid fa-angle-left"></i></button>',
        //         nextArrow: '<button class="slick-arrow slick-next" aria-label="Slide tiếp theo"><i class="fa-solid fa-angle-right"></i></button>',
        //         responsive: [
        //             {
        //                 breakpoint: 1023,
        //                 settings: {
        //                     infinite: false,
        //                     slidesToShow: 2.6,
        //                     slidesToScroll: 2,
        //                     arrows: true,
        //                 }
        //             },
        //             {
        //                 breakpoint: 767,
        //                 settings: {
        //                     infinite: false,
        //                     slidesToShow: 1.7,
        //                     slidesToScroll: 1,
        //                     arrows: true,
        //                 }
        //             },
        //             {
        //                 breakpoint: 577,
        //                 settings: 'unslick'
        //             }
        //         ]
        //     });
        // }
    </script>
@endpush