<!-- BEGIN: SLICK -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- END: SLICK -->
<script type="text/javascript">
    $(window).ready(function(){
        $('.effectFadeIn').each(function(){
            $(this).css('opacity', 0);
        });

        buildTocContentMain('js_buildTocContentSidebar_element');
    });
    /* fixed menu khi scroll đối với giao diện nhỏ hơn 990px */ 
    $(window).scroll(function(){
        // const heightMenu = $('.headerMain').outerHeight();
        if($(window).scrollTop()>300){
            $('.headerMain').addClass('fixed');
            $('.headerMain').css('opacity', '1');
        }
        if($(window).scrollTop()<=300){
            $('.headerMain').removeClass('fixed');
            $('.headerMain').css('opacity', '0');
        }
        if($(window).scrollTop()<55){
            $('.headerMain').removeClass('fixed');
            $('.headerMain').css('opacity', '1');
        }
    })
    const percentHeightScreenEffect = 1.3;
    /* hiệu ứng fade in */
    $(window).scroll(function(){
        $('.effectFadeIn').each(function(){
            const positionElement   = $(this).offset().top;
            const heightWindow      = $(window).height();
            const positionScroll    = $(window).scrollTop();
            if(parseInt(heightWindow/percentHeightScreenEffect + positionScroll)>=positionElement){
                $(this).animate({
                    opacity : 1,
                }, 800);
            }
        })
    });
    /* hiệu ứng rơi xuống => dùng cho phần tử có scrollTop thấp hơn ít nhất 1 màn hình */
    $(window).scroll(function(){
        $('.effectDropdown').each(function(){
            /* ẩn trước */
            if(!$(this).hasClass('alreadyEffectDropdown')) $(this).css('opacity', 0);
            /* thao tác */
            const positionElement   = $(this).offset().top;
            const heightWindow      = $(window).height();
            const positionScroll    = $(window).scrollTop();
            if(!$(this).hasClass('alreadyEffectDropdown')&&parseInt(heightWindow/percentHeightScreenEffect + positionScroll)>=positionElement){
                    const marginTopReal = parseInt($(this).css('margin-top'));
                    $(this).css({
                        'margin-top'    : (marginTopReal - 200)+'px'
                    });
                    $(this).animate({
                        'margin-top'    : marginTopReal+'px',
                        'opacity'       : 1
                    }, 800);
                    /* thực hiện rồi thì không thực hiện nữa */
                    $(this).addClass('alreadyEffectDropdown');
            }
        })
    });
    /* hiệu ứng xuất hiện từ trái qua phải => dùng cho phần tử có scrollTop thấp hơn ít nhất 1 màn hình */
    $(window).scroll(function(){
        $('.effectLeftToRight').each(function(){
            /* ẩn trước */
            if(!$(this).hasClass('alreadyEffectLeftToRight')) $(this).css('opacity', 0);
            /* thao tác */
            const positionElement           = $(this).offset().top;
            const heightWindow              = $(window).height();
            const positionScroll            = $(window).scrollTop();
            if(!$(this).hasClass('alreadyEffectLeftToRight')&&parseInt(heightWindow/percentHeightScreenEffect + positionScroll)>=positionElement){
                    const marginLeftReal    = parseInt($(this).css('margin-left'));
                    $(this).css({
                        'margin-left'   : (marginLeftReal - 200)+'px'
                    });
                    $(this).animate({
                        'margin-left'    : marginLeftReal+'px',
                        'opacity'       : 1
                    }, 800);
                    /* thực hiện rồi thì không thực hiện nữa */
                    $(this).addClass('alreadyEffectLeftToRight');
            }
        })
    });
    /* hiệu ứng xuất hiện từ dưới lên => dùng cho phần tử có scrollTop thấp hơn ít nhất 1 màn hình */
    $(window).scroll(function(){
        $('.effectBottomToTop').each(function(){
            /* ẩn trước */
            if(!$(this).hasClass('alreadyEffectBottomToTop')) $(this).css('opacity', 0);
            /* thao tác */
            const positionElement           = $(this).offset().top;
            const heightWindow              = $(window).height();
            const positionScroll            = $(window).scrollTop();
            if(!$(this).hasClass('alreadyEffectBottomToTop')&&parseInt(heightWindow/percentHeightScreenEffect + positionScroll)>=positionElement){
                    const marginTopReal     = parseInt($(this).css('margin-top'));
                    $(this).css({
                        'margin-top'    : (marginTopReal + 200)+'px'
                    });
                    $(this).animate({
                        'margin-top'    : marginTopReal+'px',
                        'opacity'       : 1
                    }, 800);
                    /* thực hiện rồi thì không thực hiện nữa */
                    $(this).addClass('alreadyEffectBottomToTop');
            }
        })
    });
    /* tocContent */
    function buildTocContentMain(idElement){
        var dataTocContent      = {};
        var i                   = 0;
        var indexToc            = 0;
        $('#'+idElement).find('h2').each(function(){
            if($(this).is(":visible")){
                let dataId        = $(this).attr('id');
                if(typeof dataId=='undefined'){
                    dataId          = 'thiet-ke-website-kien-giang_'+i;
                    $(this).attr('id', dataId);
                    ++indexToc;
                }
                const name          = $(this)[0].localName;
                const dataTitle     = $(this).html();
                dataTocContent[i]   = {
                    id      : dataId,
                    name    : name,
                    title   : dataTitle
                };
                ++i;
            }
        });
        $.ajax({
            url         : '{{ route("main.buildTocContentMain") }}',
            type        : 'get', 
            dataType    : 'html',
            data        : {
                dataSend    : dataTocContent
            },
            success     : function(data){
                $('#tocContentMain').html(data);
                fixedTocContentIcon();
                setHeightTocFixed();

                $(window).resize(function() {
                    fixedTocContentIcon();
                    setHeightTocFixed();
                });

                $('.tocFixedIcon, #callTocContentFromMenu, .tocFixed').click(function(){
                    let elementMenu = $('.tocContentMain.tocFixed');
                    let displayMenu = elementMenu.css('display');
                    if(displayMenu=='none'){
                        elementMenu.css('display', 'block');
                    }else {
                        elementMenu.css('display', 'none');
                    }
                    // fixedTocContentIcon();
                });

                $('.tocContentMain_title, .tocContentMain_close').click(function(){
                    let elemtMenu   = $('.tocContentMain .tocContentMain_list');
                    let displayMenu = elemtMenu.css('display');
                    if(displayMenu=='none'){
                        elemtMenu.css('display', 'block');
                        $('.tocContentMain_close').removeClass('hidden');
                    }else {
                        elemtMenu.css('display', 'none');
                        $('.tocContentMain_close').addClass('hidden');
                    }
                });

                function fixedTocContentIcon(){
                    let widthS      = $(window).width();
                    let widthC      = $('.container').outerWidth();
                    let leftE       = parseInt((widthS - widthC - 70) / 2);
                    if($(window).width() < 1200){
                        leftE       = parseInt((widthS - widthC + 20) / 2);
                    }
                    // $('.tocFixedIcon').css('left', leftE);
                }

                function setHeightTocFixed(){
                    let heightToc   = parseInt($(window).height() - 210);
                    $('.tocContentMain.tocFixed .tocContentMain_list').css('height', heightToc+'px');
                }

                let element         = $('#tocContentMain');
                if(element.length>0){
                    let positionE       = element.offset().top;
                    let heightE         = element.outerHeight();
                    let boxContent      = $('#'+idElement);
                    let positionB       = boxContent.offset().top;
                    let heightB         = boxContent.outerHeight();
                    let heightFooter    = $('.footer').outerHeight();
                    $(document).scroll(function(){
                        let scrollNow   = $(document).scrollTop();
                        // let minScroll   = parseInt(heightE + positionE);
                        // let maxScroll   = parseInt(heightB + positionB - heightFooter);
                        if(scrollNow > 500&& $(window).width()>990){ 
                            $('.tocFixedIcon').css('display', 'block');
                        }else {
                            $('.tocFixedIcon').css('display', 'none');
                        }
                    });
                }
            }
        });
    }
    /* Go to top */
    mybutton 					    = document.getElementById("smoothScrollToTop");
    mybutton.style.display 	        = "none";
    window.onscroll                 = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.style.display 	= "block";
        } else {
            mybutton.style.display 	= "none";
        }
    }
    function smoothScrollToTop() {
        // const currentScroll = document.documentElement.scrollTop;
        // if (currentScroll > 0) {
        //     window.requestAnimationFrame(smoothScrollToTop);
        //     window.scrollTo(0, currentScroll - currentScroll / 8);
        // }
        document.documentElement.scrollTop          = 0;
    }
    /* link to a href #id smooth */
    document.querySelectorAll('a[href^="#"]').forEach(function(a) {
        a.addEventListener('click', function(event) {
            event.preventDefault();
            let id = this.getAttribute('href');
            let element = document.querySelector(id);
            if (!element) {
                console.error(`Element with ID ${id} not found`);
                return;
            }
            let offsetTop = element.offsetTop;
            window.scrollTo({
                top: offsetTop + 200,
                behavior: 'smooth'
            });
        });
    });
</script>