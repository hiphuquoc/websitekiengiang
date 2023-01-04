@php
    $arrayData  = [
        0 => [
            'img'       => '/storage/images/quy-trinh-thiet-ke-website-1.png',
            'title'     => 'Tư vấn và Thống nhất yêu cầu',
            'content'   => '<ul>
                                <li>Tư vấn khách hàng về yêu cầu tính năng và giao diện Website.</li>
                                <li>Thống nhất yêu cầu, điều khoản và thời gian hoàn thành.</li>
                                <li>Khách hàng cọc 50% tổng giá trị hợp đồng.</li>
                            </ul>'
        ],
        1 => [
            'img'       => '/storage/images/quy-trinh-thiet-ke-website-2.png',
            'title'     => 'Thiết kế giao diện',
            'content'   => '<ul>
                                <li>Designer tư vấn giao diện và bố cục cho bạn.</li>
                                <li>Tiến hành thiết kế.</li>
                                <li>Chỉnh sửa thiết kế theo yêu cầu của bạn.</li>
                            </ul>'
        ],
        2 => [
            'img'       => '/storage/images/quy-trinh-thiet-ke-website-3.png',
            'title'     => 'Lập trình giao diện và tính năng',
            'content'   => '<ul>
                                <li>Lập trình giao diện và tính năng theo thiết kế.</li>
                                <li>Gửi demo và tiến hành chỉnh sửa theo yêu cầu, góp ý của bạn.</li>
                            </ul>'
        ],
        3 => [
            'img'       => '/storage/images/quy-trinh-thiet-ke-website-4.png',
            'title'     => 'Nghiệm thu và bàn giao',
            'content'   => '<ul>
                                <li>Public Website lên hosting theo địa chỉ domain bạn đã chọn.</li>
                                <li>Hướng dẫn sử dụng các thao tác trên Website, Google Analytics, Google Console,...</li>
                                <li>Bàn giao mã nguồn, tài khoản Admin - FTP,...</li>
                                <li>Khách hàng thanh toán 50% còn lại.</li>
                            </ul>'
        ]
    ]
@endphp

<div class="container">
    <div class="stepByStepBox_head">
        <h2 id="quy-trinh-thiet-ke-website-kien-giang">Quy trình thiết kế Website</h2>
        <div class="stepByStepBox_head_desc">Quy trình làm việc và tương tác khách hàng của Thiết kế Website {{ ucwords(env('LOCAL_VN')) }}</div>
    </div>
    <div class="stepByStepBox_body">
        <!-- Desktop -->
        <div class="hide-766">
            <div class="guideBookBox">
                <div class="guideBookBox_image effectFadeIn">
                    <div class="galleryCustomBox">
                        <div id="js_setGuideBook_image" class="galleryCustomBox_box">
                            @foreach($arrayData as $item)
                                <img src="{{ $item['img'] }}" alt="{{ $title ?? null }}" title="{{ $title ?? null }}" />
                            @endforeach
                            <input type="hidden" id="js_prevNextGallery_input" value="0" />
                        </div>
                        <div class="galleryCustomBox_arrow">
                            <div class="privious" id="js_prevNextGallery_prev" onClick="prevNextGallery('previous');"></div>
                            <div class="next" id="js_prevNextGallery_next" onClick="prevNextGallery('next');"></div>
                        </div>
                    </div>
                </div>
                <div class="guideBookBox_content">
                    <div id="js_setGuideBook_box" class="guideBookStepByStep">
                        @foreach($arrayData as $item)
                            @php
                                $active = $loop->index==0 ? 'active' : null;
                            @endphp
                            <div class="guideBookStepByStep_item {{ $active }}" onClick="setGuideBook({{ $loop->index }});">
                                <div class="guideBookStepByStep_item_title">
                                    <span class="guideBookStepByStep_item_title_no">{{ $loop->index + 1 }}</span>{{ $item['title'] }}
                                </div>
                                <div class="guideBookStepByStep_item_text">
                                    {!! $item['content'] !!} 
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>  
        </div>
        <!-- Mobile --> 
        <div class="show-766">
            {{-- <div class="guideBookBoxMobile">
                <div class="guideBookBoxMobile_image">
                    @foreach($arrayData as $image)
                        <img src="{{ $image['img'] }}" alt="{{ $title ?? null }}" title="{{ $title ?? null }}" />
                        @php
                            if($loop->index==2) break;
                        @endphp
                    @endforeach
                </div>
                <div id="js_showHideElement_box" class="guideBookBoxMobile_box">
                    <div class="guideBookBoxMobile_box_title">
                        <h2 class="maxLine_1">{{ $title ?? null }}</h2>
                        <div class="guideBookBoxMobile_box_title_close" onClick="showHideElement('js_showHideElement_box');"></div>
                    </div>
                    <div class="guideBookBoxMobile_box_content customScrollBar-y" style="height:calc(100% - 100px)">
                        @foreach($arrayData as $item)
                            <div class="guideBookBoxMobile_box_content_item">
                                <img src="{{ $item['img'] }}" alt="{{ $title ?? null }}" title="{{ $title ?? null }}" />
                                {!! $item['content'] !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
            <div class="guideBookBoxMobile">
                <div id="js_showHideElement_box" class="guideBookBoxMobile_box">
                    <div class="guideBookBoxMobile_box_title">
                        <h2 class="maxLine_1">Quy trình thiết kế Website</h2>
                        <div class="guideBookBoxMobile_box_title_close" onClick="showHideElement('js_showHideElement_box');"></div>
                    </div>
                    <div class="guideBookBoxMobile_box_content customScrollBar-y" style="height:calc(100% - 100px)">
                        @foreach($arrayData as $item)
                            <div class="guideBookBoxMobile_box_content_item">
                                <img src="{{ $item['img'] }}" alt="Quy trình thiết kế Website" title="Quy trình thiết kế Website" />
                                {!! $item['content'] !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <img src="{{ $arrayData[0]['img'] }}" alt="Quy trình thiết kế Website" title="Quy trình thiết kế Website" />
            <div class="viewMore">
                <div onClick="showHideElement('js_showHideElement_box');"><i class="fa-solid fa-arrow-down-long"></i>Xem chi tiết</div>
            </div>
        </div>
    </div>
</div>

@push('scriptCustom')
    <script type="text/javascript">
        $(window).ready(function(){
            prevNextGallery();
        })

        function prevNextGallery(action = null){
            const valueNow      = $('#js_prevNextGallery_input').val();
            /* thực hiện */
            let valueNew    = 0;
            if(action=='previous'&&valueNow>0) {
                valueNew    = parseInt(valueNow) - 1;
            }else if(action=='next'&&valueNow<parseInt($('#js_setGuideBook_box').children().length)-1) {
                valueNew    = parseInt(valueNow) + 1;
            }
            hideShowButtonGallery(valueNew);
            setGuideBook(valueNew);
        }

        function hideShowButtonGallery(valueCompare){
            /* ẩn button privious nếu là phần tử đầu tiên */
            if(valueCompare==0){
                $('#js_prevNextGallery_prev').css('display', 'none');
            }else {
                $('#js_prevNextGallery_prev').css('display', 'block');
            }
            /* ẩn button next nếu là phần tử cuối cùng */
            if(valueCompare==parseInt($('#js_setGuideBook_box').children().length)-1){
                $('#js_prevNextGallery_next').css('display', 'none');
            }else {
                $('#js_prevNextGallery_next').css('display', 'block');
            }
            $('#js_prevNextGallery_input').val(valueCompare);
        }

        function setGuideBook(valueSet){
            /* active */
            $('#js_setGuideBook_box').children().each(function(){
                $(this).removeClass('active');
            });
            $('#js_setGuideBook_box').children().eq(valueSet).addClass('active');
            /* set transform */
            let valueTransform = parseInt(valueSet*600);
            $('#js_setGuideBook_image').css('transform', 'translate3d(-'+valueTransform+'px, 0px, 0px)');
            /* set value input */
            hideShowButtonGallery(valueSet);
        }

        function showHideElement(idElement){
            const displayElement = $('#'+idElement).css('display');
            if(displayElement=='none'){
                $('#'+idElement).css({
                    'display'   : 'block'
                });

            }else {
                $('#'+idElement).css({
                    'display'   : 'none'
                });
            }

            $('.guideBookBoxMobile_box_content').slick({
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true
            });
        }
    </script>
@endpush