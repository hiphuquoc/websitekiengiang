<div class="slideBox">
    <div class="slideBox_head">
        @include('main.snippets.headerMain')
    </div>  
    <div class="slideBox_body">
        <div class="container">
            <div class="slideBox_body_left">
                <div id="slideEffectDropdown" style="opacity:0;">
                    <h2>
                        <span>Website sẽ là "cỗ máy in tiền"</span>
                        <span>nếu bạn đầu tư đúng cách</span>
                    </h2>
                    <div class="slideBox_body_left_desc">
                        <span>Chúng tôi sẽ giúp bạn thiết kế, tối ưu toàn diện và quản trị Website.</span>
                        <span>Website của bạn sẽ trở thành nơi thu hút, giữ chân khách hàng và vượt qua mọi đối thủ</span>
                        <span>giúp doanh nghiệp tạo nên giá trị thương hiệu 4.0 chuyên nghiệp.</span>
                    </div>
                </div>
                <div id="slideEffectFadeIn" class="aboutUsSortBox" style="opacity:0;">
                        <div class="aboutUsSortBox_item">
                            <div class="aboutUsSortBox_item_number">
                                +10
                            </div>
                            <div class="aboutUsSortBox_item_text">
                                dịch vụ
                            </div>
                        </div>
                        <div class="aboutUsSortBox_item">
                            <div class="aboutUsSortBox_item_number">
                                +5
                            </div>
                            <div class="aboutUsSortBox_item_text">
                                kinh nghiệm
                            </div>
                        </div>
                        <div class="aboutUsSortBox_item">
                            <div class="aboutUsSortBox_item_number">
                                +200
                            </div>
                            <div class="aboutUsSortBox_item_text">
                                khách hàng thân thiết
                            </div>
                        </div>
                </div>
            </div>
            {{-- <div class="slideBox_body_right">
                <img class="animation_1" src="/images/svg/animation-1.svg" alt="thiết kế website kiên giang" title="thiết kế website kiên giang" />
                <img class="animation_2" src="/images/svg/animation-2.svg" alt="thiết kế website kiên giang" title="thiết kế website kiên giang" />
                <img class="animation_3" src="/images/svg/animation-3.svg" alt="thiết kế website kiên giang" title="thiết kế website kiên giang" />
                <img class="animation_4" src="/images/svg/animation-4.svg" alt="thiết kế website kiên giang" title="thiết kế website kiên giang" />
            </div> --}}
        </div>
    </div>
    <div class="slideBox_bottom">
        <img src="/storage/images/bg-wave-1.png" alt="Thiết kế website kiên giang" title="Thiết kế website kiên giang" />
    </div>
    <video id="js_loadVideoBackground" class="slideBox_video" type="video/mp4" autoplay muted loop>
        <!-- js loadVideoBackground -->
    </video>
</div>
@push('scriptCustom')
<script type="text/javascript">
    $(window).ready(function(){
        
        /* hiệu ứng rơi xuống */
        const elementDropdown   = $('#slideEffectDropdown');
        const marginTopReal     = parseInt(elementDropdown.css('margin-top'));
        elementDropdown.css({
            'margin-top'    : (marginTopReal - 200)+'px'
        });
        setTimeout(() => {
            elementDropdown.animate({
                'margin-top'    : marginTopReal+'px',
                'opacity'       : 1
            }, 800, function(){
                slideEffectFadeIn();
                loadVideoBackground();
            });
        }, 300);
    })
    // /* ẩn trước phần tử effect dropDown */
    // const elementDropdown   = $('#slideEffectDropdown');
    // const marginTopReal     = parseInt(elementDropdown.css('margin-top'));
    // elementDropdown.css({
    //     'margin-top'    : (marginTopReal - 200)+'px'
    // });
    
    /* hiệu ứng fade in */
    function slideEffectFadeIn(){
        const elementFladeIn    = $('#slideEffectFadeIn');
        elementFladeIn.animate({
            opacity : 1,
        }, 800);
    }
    /* thay background image bằng video */
    function loadVideoBackground(){
        $.ajax({
            url: '/storage/videos/background-slide-19.mp4',
            type: 'GET',
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.responseType = 'blob';
                return xhr;
            },
            success: function(data) {
                var videoUrl = URL.createObjectURL(data);
                const sourceVideo = '<source src="'+videoUrl+'" title="thiết kế website kiên giang">Video thiết kế website kiên giang';
                setTimeout(function(){
                    $('#js_loadVideoBackground').html(sourceVideo);
                }, 500);
            }
        });
    }
</script>
@endpush