@php
    use \App\Helpers\Words;
@endphp

<div class="faqBox">
    <div class="container">
        <div class="faqBox_head">
            <h2 id="cau-hoi-thuong-gap-thiet-ke-website-kien-giang">Câu hỏi thường gặp</h2>
            @if(!empty($description))
                <div class="faqBox_head_desc">{{ $description }}</div>
            @endif
        </div>
        <div class="faqBox_body effectFadeIn">
            @foreach($faqs as $faq)
                <div class="faqBox_body_item">
                    <h3 class="faqBox_body_item_question">{!! Words::convertLocal($faq['question']) !!}</h3>
                    <div class="faqBox_body_item_answer" style="display:none;">{!! Words::convertLocal($faq['answer']) !!}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('scriptCustom')
    <script type="text/javascript">
        $('.faqBox_body_item_question').on('click', function(){
            if($(this).hasClass('open')){
                $(this).removeClass('open');
                $(this).next().toggle(150);
            }else {
                $(this).next().toggle(150);
                $(this).addClass('open');
            }
        });
    </script>
@endpush