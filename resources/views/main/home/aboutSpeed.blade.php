<div class="aboutSpeedBox">
    
    <div class="aboutSpeedBox_content">
        <div class="aboutSpeedBox_content_title">
            <h2>Thiết kế tối ưu trải nghiệm người dùng</h2>
        </div>
        <div class="aboutSpeedBox_content_text effectFadeIn">
            <div>Trải nghiệm người dùng là tiêu chí tiên quyết để đánh giá độ thành công của một Website và thương hiệu 4.0.</div>
            <p></p>
            <h3>Tốc độ tải trang ảnh hưởng đến trải nghiệm người dùng</h3>
            <div>Khách hàng nhận định "Nếu trang tải nhanh, chắc chắn trang web đó chuyên nghiệp!"</div>
            <div>47% người dùng kỳ vọng website tải trong vòng chưa đầy 2 giây, 40% sẽ bỏ đi nếu trang tải trên 3 giây.</div>
            <div>Để tạo nên trải nghiệm người dùng tích cực Website phải "cung cấp được những gì khách truy cập tìm kiếm và phải cung cấp thật nhanh".</div>
            <p></p>
            <div class="columnFormat">
                <div class="columnFormat_text">
                    <h3>Ngoài ra, còn phải đáp ứng được trên mọi thiết bị</h3>
                    <div>80% người sử dụng Smartphone truy cập Internet để tìm kiếm thông tin.</div>
                    {{-- <div>Thiết bị di động được tích hợp khoảng 65% các phương tiện truyền thông kỹ thuật số, trong khi máy tính chỉ hỗ trợ 35%.</div> --}}
                    <div>Chi tiêu dành cho quảng cáo trên thiết bị di động chiếm trên 70%.</div>
                    <div>Chính vì vậy, một <strong>Website chuyên nghiệp</strong> phải được thiết kế để phù hợp với tất cả truy cập từ:</div> 
                    <div class="format">
                        <div>Mọi thiết bị truy cập Desktop, Laptop, Mobile, Tablet,...</div>
                        <div>Mọi nền tảng Windows, Android, iOS, Windows phone,...</div>
                        <div>Và mọi độ phân giải màn hình.</div>
                    </div>
                    <p></p>
                    <h3>Và quan trọng hơn là...</h3>
                    <div class="formatMobile"><strong>Thiết kế Website Kiên Giang</strong> hiểu được tầm quan trọng của những yếu tố này và có đủ trình độ kỹ thuật, kinh nghiệm để tạo ra những sản phẩm tốt nhất dành cho bạn! Hãy để chúng tôi giúp bạn xây dựng một website chuyên nghiệp và thành công.</div>
                </div>
                <div id="imageSpeedDropdown" class="columnFormat_image">
                    <img src="/images/about-speed-2.png" alt="thiết kế website chuẩn seo kiên giang" title="thiết kế website chuẩn seo kiên giang" />
                </div>
            </div>
        </div>  
    </div>
    <div id="effectRocket" class="aboutSpeedBox_image">
        <img src="/images/about-speed-1.webp" alt="thiết kế website chuẩn seo kiên giang" title="thiết kế website chuẩn seo kiên giang" />
    </div>
</div>
@push('scriptCustom')
    <script type="text/javascript">
    
        /* hiệu ứng ảnh rơi - rocket chạy */
        $(window).scroll(function(){
            if($(window).width()>766){
                const element               = $('#imageSpeedDropdown');
                /* ẩn ảnh và ẩn rocket trước */
                if(!element.hasClass('alreadyEffectDropdown')) {
                    $('#effectRocket').css('visibility', 'hidden');
                }
                /* thao tác */
                const positionElement   = element.offset().top;
                const heightWindow      = $(window).height();
                const positionScroll    = $(window).scrollTop();
                if(!element.hasClass('alreadyEffectDropdown')&&parseInt(heightWindow/1.4 + positionScroll)>=positionElement){
                    const marginTopReal = parseInt(element.css('margin-top'));
                    element.css({
                        'margin-top'    : (marginTopReal - 200)+'px'
                    });
                    element.animate({
                        'margin-top'    : marginTopReal+'px',
                        'opacity'       : 1
                    }, 800);
                    /* gọi hiệu ứng rocket */
                    setTimeout(function(){
                        setInterval(() => {
                            effectRocket();
                        }, 100);
                    }, 1000);
                    /* thực hiện rồi thì không thực hiện nữa */
                    element.addClass('alreadyEffectDropdown');
                }
            }
        });
        /* hiệu ứng rocket */
        const topOld    = parseInt($('#effectRocket').css('top'));
        const rightOld  = parseInt($('#effectRocket').css('right'));
        const topNew    = parseInt(topOld - 100);
        const rightNew  = parseInt(rightOld - 100);
        function effectRocket(){
            /* hiện lại trước khi thực thi */
            $('#effectRocket').css('visibility', 'visible');
            /* thực thi */
            $('#effectRocket').animate({
                top     : topNew+'px',
                right   : rightNew+'px',
                opacity : 1
            }, 3000);
            setTimeout(() => {
                $('#effectRocket').animate({
                    top     : topOld+'px',
                    right   : rightOld+'px',
                    opacity : 0
                }, 0);
            }, 0);
        }
    </script>
@endpush