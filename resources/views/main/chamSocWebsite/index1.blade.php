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
    $lowPrice   = 14250000;
    $highPrice  = 100000000;
@endphp
@include('main.schema.product', ['data' => $item, 'lowPrice' => $lowPrice, 'highPrice' => $highPrice])
<!-- END:: Product Schema -->

{{-- <!-- STRAT:: Article Schema -->
@include('main.schema.breadcrumb', ['data' => $breadcrumb])
<!-- END:: Article Schema --> --}}

<!-- STRAT:: FAQ Schema -->
@include('main.schema.faq', ['data' => $item->faqs])
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
    <div style="overflow:hidden;">
        <!-- === START:: Header Top === -->
        @include('main.snippets.headerTop')
        <!-- === END:: Header Top === -->
        
        <div id="js_contentBox">
            @include('main.chamSocWebsite.backgroundHead', ['url' => '/storage/images/banner-cham-soc-website.png'])

            <!-- Lợi ích dịch vụ chăm sóc website -->
            <div class="sectionBox" style="background:#fff url('/storage/images/background-inside-1.png') no-repeat;background-size: 100% auto;">
                <div class="container">
                    @include('main.chamSocWebsite.tourView')
                </div>
            </div>

            <!-- Bảng giá chăm sóc website kiên giang -->
            <div class="sectionBox" style="background:#ffffd1;">
                @include('main.home.price')
            </div>

            <!-- Câu hỏi thường gặp -->
            <div class="sectionBox">
                @include('main.home.faq', [
                    'description'   => 'Những thông tin có lẽ bạn đang thắc mắc về dịch vụ Chăm sóc Website '.ucwords(env('LOCAL_VN')),
                    'faqs'          => $item->faqs
                ])
            </div>

            <!-- tocContent main -->
            <div id="tocContentMain"></div>
        </div>
    </div>
@endsection
@push('modal')
    <!-- Form -->
    @include('main.home.form', [
        'prices'    => $item->service->prices,
        'type'      => 'care_website'
    ])
@endpush
@push('bottom')
    <!-- === START:: Zalo Ring === -->
    @include('main.snippets.zaloRing')
    <!-- === END:: Zalo Ring === -->
@endpush
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